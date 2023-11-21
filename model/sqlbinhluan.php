<?php 
 function danhsach_binhluan(){
    $sql = "select * from binhluan";
    $resuft = pdo_query($sql);
    return $resuft;
 }
 function del_binhluan($idbl){
    $sql = "delete from binhluan where id_bl = $idbl";
    pdo_execute($sql);
 }
 function add_binhluan($noidung,$idkhach,$dae,$idsp){
   $sql = "insert into `binhluan` (`noi_dung`,`id_user`,`id_sp`,`ngay_cmt`) values('$noidung','$idkhach','$idsp','$dae')";
   pdo_execute($sql);
 }

 function getall_binhluan($id){
   $sql = "select binhluan.noi_dung,binhluan.id_bl, binhluan.ngay_cmt, khachang.fullname,khachang.role,khachang.email,binhluan.id_user, khachang.image from binhluan
   inner join khachang on binhluan.id_user = khachang.id_kh
   where binhluan.id_sp = $id";
   $resuft = pdo_query($sql);
   return $resuft;
}

?>