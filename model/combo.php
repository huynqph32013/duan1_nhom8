<?php 
    function danhsach_combo(){
            $sql = "select * from combo";
            $result = pdo_query($sql);
            return $result;
    }
    function add_combo($name,$giamgia,$img,$mota){
        $sql = "insert into `combo`(`ten_combo`, `discout`, `imgcombo` ,`mo_ta`) VALUES ('$name','$giamgia','$img','$mota')";
        pdo_execute($sql);
    }
    function getone_combo($id){
        $sql = "select * from `combo` WHERE `id_combo`= $id";
        $result = pdo_query_one($sql);
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
?>