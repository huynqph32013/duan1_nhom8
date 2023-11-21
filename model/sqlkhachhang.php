<?php 
    function danhsach_khachhang(){
        $sql = "select * from khachang";
        $result = pdo_query($sql);
        return $result;
    }
    function add_khachang($usname,$pass,$email,$sdt,$img,$dc,$hoten,$role){
        $sql = "insert into `khachang`(`username`, `password`, `email`, `sdt`, `image`, `address`, `fullname`, `role`) 
        VALUES ('$usname','$pass','$email','$sdt','$img','$dc','$hoten','$role')";
        pdo_execute($sql);
    }
    function getone_khachhang($idkh){
        $sql = "select * from khachang where id_kh = $idkh";
        $result = pdo_query_one($sql);
        return $result;
    }
 

    function edit_khachang($usname,$pass,$email,$sdt,$img,$dc,$hoten,$role,$idkh){
        $kh = getone_khachhang($idkh);
        if($img != null){
            if($kh['image'] != null && $kh['image'] != ""){
                $imglink = "../uploads/".$kh['image'];
                unlink($imglink);
            }
            
            $sql = "update `khachang` set `username`='$usname',`password`='$pass',`email`='$email',`sdt`='$sdt',`image`='$img',`address`='$dc',`fullname`='$hoten',`role`='$role' where id_kh = '$idkh'";
            ;
        }else{
            $sql = "
            update `khachang` set `username`='$usname',`password`='$pass',`email`='$email',`sdt`='$sdt',`address`='$dc',`fullname`='$hoten',`role`='$role' where id_kh = '$idkh'
            ";
        }
        
        pdo_execute($sql);
    }


    function del_khachang($idkh){
        $sql = "delete from khachang where id_kh = $idkh";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql = "select * from khachang where username = '$user' and password = '$pass'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function checkrole($role){
        switch($role){
            case 1: echo "Admin";break;
            case 0: echo "User";break;
            case 2: echo "Quản Trị";break;
            default: echo "User";break;
        }
    }
?>