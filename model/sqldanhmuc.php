<?php 
    function danhsach_danhmuc(){
        $sql = "select * from danhmuc";
        $result = pdo_query($sql);
        return $result;
    }
    function them_danhmuc($tendm){
        $sql = "insert into danhmuc(`ten_dm`)values('$tendm')";
        pdo_execute($sql);
    }
    function getone_danhmuc($iddm){
        $sql = "select * from danhmuc where id_dm = $iddm";
        $result = pdo_query_one($sql);
        return $result;
    }
    function edit_danhmuc($iddm, $tendm){
        $sql = "update `danhmuc` set `ten_dm`='$tendm' WHERE id_dm = '$iddm'";
        pdo_execute($sql);
    }
    function del_danhmuc($iddm){
        $sql = "delete from danhmuc where id_dm = $iddm";
        pdo_execute($sql);
    }
    function sanpham_danhmuc($iddm){
        $sql = "select * from sanpham where id_dm = $iddm";
        $result =  pdo_query_one($sql);
        return $result;
    }
?>