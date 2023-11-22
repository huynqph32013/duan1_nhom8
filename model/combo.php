<?php 


    function danhsach_combodetails($idcombodetails){
        $sql = "
        select combo_detail.ten_combo , combo_detail.discout, combo_detail.imgcombo, combo_detail.mo_ta, combo.id_sp, combo.img_details,combo.name_details,combo.gia_sp 
        from combo_detail
        inner join combo on combo_detail.id_combo_details = combo.id_combo_details
        where combo_detail.id_combo_details = $idcombodetails
        ";
        $result= pdo_query_one($sql);
        return $result;

    }

    function add_combo($idsp,$namesp,$imgsp,$giasp,$idcombodetails,$tonggia){
      $sql = "insert into `combo`(`id_sp`, `img_details`, `name_details`, `gia_sp`, `id_combo_details`, `tong_gia`) VALUES ('$idsp','$imgsp','$namesp','$giasp','$idcombodetails','$tonggia')";
      pdo_execute($sql);
    }
    function danhsach_combodetail(){
            $sql = "select * from combo_detail";
            $result = pdo_query($sql);
            return $result;
    }
    function add_combodetails($name,$giamgia,$img,$mota){
        $sql = "insert into `combo_detail`(`ten_combo`, `discout`, `imgcombo` ,`mo_ta`) VALUES ('$name','$giamgia','$img','$mota')";
        return pdo_execute_id($sql);
    }
    function getone_combo($id){
        $sql = "select * from `combo` WHERE `id_combo`= $id";
        $result = pdo_query_one($sql);
        return $result;

    }
    function getone_combodetail($id){
        $sql = "select * from `combo_detail` WHERE `id_combo_details`= $id";
        $result = pdo_query_one($sql);
        return $result;

    }
    function getone_combo_id($id){
        $sql = "select * from `combo` WHERE `id_combo_details`= $id";
        $result = pdo_query($sql);
        return $result;

    }
    function edit_combo($name,$giamgia,$img,$mota,$idcombo){
        $combo = getone_combo($idcombo);
        if($img != null){
            if($combo['img'] != null && $combo['img'] != ""){
                $imglink = "../uploads/".$combo['img'];
                unlink($imglink);
            }
            $sql = "
                update combo SET ten_combo='$name',discout='$giamgia',mo_ta='$mota', imgcombo='$img' WHERE id_combo = $idcombo
            ";
        }else{
            $sql = "
                update combo SET ten_combo='$name',discout='$giamgia',mo_ta='$mota', WHERE id_combo = $idcombo
            ";
        }
        
        pdo_execute($sql);
    }
   function del_combo($id){
    $sql = "delete from `combo` where `id_combo` = $id";
    pdo_execute($sql);
   }


function chitiet_combo($idcb){
    $sql = "select combo.id_combo,combo.ten_combo, combo.discout,combo.imgcombo, combo.mo_ta, sanpham.id_sp,sanpham.name_sp,sanpham.gia,sanpham.mo_ta as motasp,sanpham.image 
    from combo left join sanpham on sanpham.id_combo = combo.id_combo where combo.id_combo = $idcb";
    $result = pdo_query($sql);
    return  $result;
}

function del_details($idsp){
    $sql = "delete from combo where id_sp = $idsp";
    pdo_execute($sql);   
}

function get_allcombo(){
    $sql = "select * from combo_detail";
    $result = pdo_query($sql);
    return $result;
  }
?>