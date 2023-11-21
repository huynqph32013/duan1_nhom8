<?php 
function danhsach_sanpham(){
    $sql = "select * from sanpham";
    $result = pdo_query($sql);
    return $result;
}
function getone_sanpham($idsp){
    $sql = "select * from sanpham where id_sp = $idsp";
    $result = pdo_query_one($sql);
    return $result;
}
function add_sanpham($tensp, $gia, $giamgia, $date, $danhmucsp, $dacbiet, $mota,  $size, $img){
    $sql = "insert into `sanpham`(`name_sp`, `gia`, `giam_gia`, `date`, `id_dm`, `dacbiet`,`mo_ta`,`size`,`image`) 
                          VALUES ('$tensp','$gia','$giamgia', '$date','$danhmucsp','$dacbiet','$mota','$size','$img')";
                          pdo_execute($sql);
}
function edit_sanpham($idsp,$tensp,$img,$gia,$giamgia,$mota,$dacbiet,$danhmucsp){
    $sp = getone_sanpham($idsp);
    if($img != null){
        if($sp['image'] != null && $sp['image'] != ""){
            $imglink = "../uploads/".$sp['image'];
            unlink($imglink);
        }
        $sql = "
            update sanpham SET name_sp='$tensp',gia='$gia',giam_gia='$giamgia',id_dm='$danhmucsp',dacbiet = '$dacbiet', mo_ta='$mota', image='$img' WHERE id_sp = $idsp
        ";
    }else{
        $sql = "
            update sanpham SET name_sp='$tensp',gia='$gia',giam_gia='$giamgia',id_dm='$danhmucsp',dacbiet = '$dacbiet',mo_ta='$mota' WHERE id_sp = $idsp
        ";
    }
    
    pdo_execute($sql);
}

function del_sanpham($idsp){
    $sql = "delete from sanpham where id_sp = $idsp";
    pdo_execute($sql);
}



function danhsach_sptheodm($iddm){
    $sql = "select sanpham.id_sp, sanpham.name_sp, sanpham.gia, sanpham.giam_gia, sanpham.image, sanpham.mo_ta,sanpham.id_dm, danhmuc.ten_dm as tendanhmuc
    from `sanpham`
    left join danhmuc on sanpham.id_dm = danhmuc.id_dm where sanpham.id_dm = $iddm";
    $result = pdo_query($sql);
    return $result;
}
function tangluotxem($idsp){
    $sanpham = getone_sanpham($idsp);
    $luotxem = $sanpham['luot_xem'] + 1;
    $sql = "update sanpham set luot_xem = $luotxem where id_sp = $idsp";
    pdo_execute($sql);
}

function search_sanpham($namesp){
    $sql = "select * from sanpham WHERE `sanpham`.`name_sp` like '%$namesp%'";
    $result = pdo_query($sql);
    return $result;
}
function top5(){
    $sql = "select * from sanpham order by luot_xem desc limit 5;";
    $result = pdo_query($sql);
    return $result;
}
function top10(){
    $sql = "select * from sanpham order by luot_xem desc limit 5,5;";
    $result = pdo_query($sql);
    return $result;
}
function sp_giamgia(){
    $sql = "select * from sanpham order by giam_gia desc limit 4;";
    $result = pdo_query($sql);
    return $result;

}
function all_spham_giamgia(){
    $sql = "select * from sanpham where giam_gia > 0 order by giam_gia desc;";
    $result = pdo_query($sql);
    return $result;
}

?>