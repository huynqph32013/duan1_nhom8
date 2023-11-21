<?php 
session_start();
ob_start();
 include '../model/pdo.php';
 include '../model/sqldanhmuc.php';
 include '../model/sqlsanpham.php';
 include '../model/sqlkhachhang.php';
 include '../model/sqlbinhluan.php';
 include '../model/cart.php';
 include '../model/combo.php';
 if(!isset($_SESSION['combo'])) $_SESSION['combo']=[];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuhn Food</title>
    <link rel="stylesheet" href="../assets/css/cssadmin.css">
    
</head>
<body>
    <div id="wrapper">
        <?php include './header.php';?>
        <?php include './nav.php';?>
        <?php 
            $dsdm = danhsach_danhmuc();
            $dskh = danhsach_khachhang();
            $dssp = danhsach_sanpham();
            if(isset($_GET['act']) && $_GET['act']){
                $act = $_GET['act'];
                switch($act){
                    case 'home':{
                        include '../admin/trangchu/home.php';
                        break;
                    }
                    case 'dsdm':{

                        include './danhmuc/dldm.php';
                        break;
                }
                case 'adddm':{
                    if(isset($_POST['btn_submit'])){
                        
                            $tendm = $_POST['tendm'];
                            them_danhmuc($tendm);
                            header('location: ?act=dsdm');
                        
                    }
                    include './danhmuc/adddm.php';
                    break;
                }
                case 'editdm':{
                    if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                        $dm = getone_danhmuc($_GET['iddm']);
                    }
                    if(isset($_POST['btnsub'])){
                        $tendm = $_POST['tendm'];
                        $iddm = $_POST['iddm'];
                        edit_danhmuc($iddm,$tendm);
                        header("location: ?act=dsdm");
                    }
                    include './danhmuc/editdm.php';
                    break;
                }
                case 'deldm':{
                    if(isset($_GET['iddm']) && $_GET['iddm']){
                        del_danhmuc($_GET['iddm']);
                        header('location: ?act=dsdm');
                    }
                    break;
                }
                case'dssp':{
                   
                    include './sanpham/dssp.php';
                    break;
                }
                case 'addsp':{
                        if(isset($_POST['subaddsp'])){
                            $tensp = $_POST['tensp'];
                            $img = null;
                            if($_FILES['img']['name'] != ""){
                                $img = time()."_".$_FILES['img']['name'];
                                move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$img");
                            }
                            $gia = $_POST['gia'];
                            $giamgia = $_POST['giamgia'];
                            $mota = $_POST['mota'];
                            $dacbiet = $_POST['dacbiet'];
                            $danhmucsp = $_POST['danhmucsp'];
                            $size = $_POST['size'];
                            $date = date('Y-m-d');
                            add_sanpham($tensp, $gia, $giamgia, $date, $danhmucsp, $dacbiet, $mota,  $size, $img);
                            header('location: ?act=dssp');
                        }
                    
                    include './sanpham/addsp.php';
                    break;
                }
                case 'editsp':{
                    if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                        $sp = getone_sanpham($_GET['idsp']);
                    }
                    if(isset($_POST['subeditsp'])){
                        $idsp = $_POST['idsp'];
                        $tensp = $_POST['tensp'];
                        $img = null;
                        if($_FILES['img']['name'] != ""){
                            $img = time() . "_" . $_FILES['img']['name'];
                            move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$img");
                        }
                        $danhmucsp = $_POST["danhmucsp"];
                        $gia = $_POST['gia'];
                        $giamgia = $_POST['giamgia'];
                        $mota = $_POST['mota'];
                        $dacbiet = $_POST['dacbiet'];
                        edit_sanpham($idsp,$tensp,$img,$gia,$giamgia,$mota,$dacbiet,$danhmucsp);
                        header('location: ?act=dssp');
                    }
                    $dssp = danhsach_sanpham();
                    include './sanpham/editsp.php';
                    break;
                }
                case 'delsp':{
                    if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                        del_sanpham($_GET['idsp']);
                        header('location: ?act=dssp');
                    }
                    break;
                }
                case 'dsbl':{
                    $dsbl = danhsach_binhluan();
                    include './binhluan/dsbl.php';
                    break;
                }
                case 'delbl':{
                    if(isset($_GET['idbl']) && $_GET['idbl'] > 0){
                        del_binhluan($_GET['idbl']);
                        header('location: ?act=dsbl');
                    }
                    break;
                }
                case 'dskh':{
                    $dskh = danhsach_khachhang();
                    include './khachhang/dskh.php';
                    break;
                }
                case 'addkh':{
                    if(isset($_POST['subaddkh'])&&$_POST['subaddkh']){
                        $usname = $_POST['usname'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $sdt = $_POST['sdt'];
                        $img = null;
                        if($_FILES['img']['name'] != ""){
                            $img = time() . "_" . $_FILES['img']['name'];
                            move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$img");
                        }
                        $dc = $_POST['dc'];
                        $hoten = $_POST['hoten'];
                        $role = $_POST['role'];
                        add_khachang($usname,$pass,$email,$sdt,$img,$dc,$hoten,$role);
                        header('location: ?act=dskh');
                    }
                    include './khachhang/addkh.php';
                    break;
                }
                case 'editkh':{
                    if(isset($_GET['idkh'])&& $_GET['idkh'] > 0){
                        $kh = getone_khachhang($_GET['idkh']);
                    }
                    if(isset($_POST['subeditkh'])){
                        $usname = $_POST['usname'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $sdt = $_POST['sdt'];
                        $img = null;
                        if($_FILES['img']['name'] != ""){
                            $img = time() . "_" . $_FILES['img']['name'];
                            move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$img");
                        }
                        $dc = $_POST['dc'];
                        $hoten = $_POST['hoten'];
                        $role = $_POST['role'];
                        $idkh = $_POST['idkh'];
                        edit_khachang($usname,$pass,$email,$sdt,$img,$dc,$hoten,$role,$idkh);
                        header('location: ?act=dskh');
                    }
                    include './khachhang/editkh.php';
                    break;
                }
                case 'delkh':{
                    if(isset($_GET['idkh'])&& $_GET['idkh']){
                        del_khachang($_GET['idkh']);
                        header('location: ?act=dskh');
                        
                    }
                    break;
                }
                case 'combo':{
                    $combodetail = danhsach_combodetail();
                    include './combo/dscombo.php';
                    break;
                }
                case 'addcombo':{
                       
                    if(isset($_POST['btnsubmit'])){
                        $name = $_POST['tencombo'];
                        $giamgia = $_POST['giamgiacb'];
                        $mota = $_POST['mota'];
                        $img = null;
                        if($_FILES['img']['name'] != ""){
                            $img = time() . "_" . $_FILES['img']['name'];
                            move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$img");
                        }
                        $idcombodetails = add_combodetails($name,$giamgia,$img,$mota);

                        if(isset($_POST['sanphamNe'])){
                            $tonggia = 0;
                            foreach($_POST['sanphamNe'] as $value){
                                
                                $idsp = $value;
                                $onesp = getone_sanpham($idsp);
                                
                                $namesp = $onesp['name_sp'];
                                $imgsp = $onesp['image'];
                                $giasp = $onesp['gia'];
                                $tonggia += $onesp['gia'];;
                                add_combo($idsp,$namesp,$imgsp,$giasp,$idcombodetails,$tonggia);

                            }
                        }
                        
                        header('location: ?act=combo');
                        
                    }
                    include './combo/addcombo.php';
                    break;
                }

                case 'chitietcomboedtails':{
                    if(isset($_GET['idcombodetails'])&&($_GET['idcombodetails'])){
                        $dscombodetails = getone_combodetail($_GET['idcombodetails']);
                        $spdt = getone_combo_id($_GET['idcombodetails']);
                    }
                    include 'combo/chitietcombo.php';
                    break;
                }
                case 'editcombo':{
              
                        if(isset($_GET['idcombo'])&&$_GET['idcombo']>0){
                            $onecombo  = getone_combo($_GET['idcombo']);
                        }
                        if(isset($_POST['btnsubmit'])){
                        $idcombo = $_POST['idcb'];
                        $name = $_POST['tencombo'];
                        $giamgia = $_POST['giamgiacb'];
                        $mota = $_POST['mota'];
                        $img = null;
                        if($_FILES['img']['name'] != ""){
                            $img = time() . "_" . $_FILES['img']['name'];
                            move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$img");
                        }
                        edit_combo($name,$giamgia,$img,$mota,$idcombo);
                        header('location: ?act=combo');
                        
                    }

                    include './combo/editcombo.php';
                    break;
                }
                case 'delcombo':{
                    if(isset($_GET['idcombo'])&& $_GET['idcombo']>0){
                        del_combo($_GET['idcombo']);
                        header('location: ?act=combo');
                    }
                    break;
                }
                case 'delmuticombo':{
                    if(isset($_POST['btnxoa'])&& isset($_POST['slcombo'])){
                        $listcombo = $_POST['slcombo'];
                        foreach($listcombo as $value){
                            del_combo($value);
                        }
                        header('location: ?act=combo');
                    }
                    break;
                }
                case 'ctdh':{
                    $dsdh = getall_dh();
                    include 'donhang/listdh.php';
                    break;
                }
                case 'chitietdonhang':{
                    if(isset($_GET['iddh'])&&$_GET['iddh']>0){
                        $iddh = $_GET['iddh'];
                        $onebil = loadone_bill($_GET['iddh']);
                        $listbill = loadone_bill($_GET['iddh']);


                        
                    }
                    include 'donhang/editdh.php';
                    break;
                }
                case 'delspdetail':{
                    if(isset($_GET['idsp'])&&($_GET['idsp'])){
                        del_details($_GET['idsp']);
                        header('location: ?act=combo');
                    }
                    
                    break;
                }
                case 'editdh':{
                    if(isset($_POST['submitct'])){
                        $ttgh = $_POST['giaohanghh'];
                        $idbill = $_POST['idbill'];
                        thaydoi_trangthai($ttgh,$idbill);
                        header('location: ?act=ctdh');
                    }
                    break;
                }




                default:{
                    include './trangchu/home.php';
                    break;
                }
            }
        }
        ?>
        <?php include './main.php';?>
        <?php include './footer.php';?>
    </div>
</body>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../assets/js/jsadmin.js"></script>
</html>