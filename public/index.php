<?php
session_start(); 
ob_start();
include '../model/pdo.php';
include '../model/sqlbinhluan.php';
include '../model/sqldanhmuc.php';
include '../model/sqlkhachhang.php';
include '../model/sqlsanpham.php';
include '../model/cart.php';
include '../model/combo.php';
if(!isset($_SESSION['myhd'])) $_SESSION['myhd']=[];
?>


<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Yuhn Food | Của Hàng Đồ Ăn &amp; Yuhn Food</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/scss/cssuser.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
  
    <?php include 'config/header.php'?>
    <?php include 'config/settinguser.php'?>

  <?php 
        $dsdm = danhsach_danhmuc();
        $top10 = top10();
        $top5 = top5();
        $spgg = sp_giamgia();
        $dsdp = search_sanpham($name);

         if(isset($_GET['act'])&&($_GET['act'])){
          $act = $_GET['act'];
          switch($act){



            case 'login':{
           if(isset($_POST['sublogin'])){
              
            $uname = $_POST['usern'];
            $password = $_POST['pass'];
            $checkus = checkuser($uname,$password);
            if(is_array($checkus)){
              $_SESSION['checkus'] = $checkus;
              header('location: ?act=home');
            }
            }
              //
              include 'login/login.php';
              break;
            }
            case 'dangky':{
              include 'login/dangki.php';
              break;
            }
            case 'home':{
              include 'trangchu/home.php';
              break;
            }
            case 'showdm':{
              if(isset($_GET['iddm']) && $_GET['iddm']>0){
                $danhmuc = danhsach_sptheodm($_GET['iddm']);
              }
              include 'config/hthidm.php';
              break;
            
            }
            case 'logout':{
              unset($_SESSION['checkus']);
              header('location: ?act=home');
              break;
            }
            case 'chitietsp':{
              if(isset($_GET['idsp'])&& $_GET['idsp']>0){
                $sanpham = getone_sanpham($_GET['idsp']);
                tangluotxem($_GET['idsp']);
                $bl = getall_binhluan($_GET['idsp']);
              }
              
              include 'config/chitietsp.php';
              break;
            }
            case 'allsp':{
              $danhmuc = danhsach_sanpham();
              include 'config/allsp.php';
              break;
            }
            case 'timkiemsp':{
              if(isset($_POST['btnsearch'])){
                
                $name = $_POST['namesp'];
                $dsdp = search_sanpham($name);
               
              }
              include 'config/searchspham.php';

              
              break;
            } 
            case 'hoadon':{
              if(isset($_POST['submitmua'])){
                $idsp = $_POST['idsp'];
                $tensp = $_POST['tensp'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];
                $soluong = 1;
                $ttien = $gia * $soluong;
                $checknum =0;
                $number = 0;

                if(isset($_SESSION['myhd'])&& count($_SESSION['myhd'])>0){
                    foreach($_SESSION['myhd'] as $value){
                      if($value[0]==$idsp){
                          $soluong += $value[4];
                          $checknum = 1;
                          $_SESSION['myhd'][$number][4] = $soluong;
                          break;
                      }
                      $number++;
                    }
                }
                if($checknum == 0){
                  $addsp = [$idsp,$tensp,$img,$gia,$soluong,$ttien];
                  array_push($_SESSION['myhd'],$addsp); 
                }

                header('location: ?act=allsp') ;
              }
              include './config/addhoadon.php';
              break;
            }

            case 'delhd':{
              if(isset($_GET['idhd'])){
                $id = $_GET['idhd'];
                array_splice($_SESSION['myhd'],$_GET['idhd'],1);
              } else {
                $_SESSION['myhd']=[];
              }
              header('location: ?act=allsp');
              break;
            }
            case 'bill':{
              include 'config/bill.php';
              break;
            }

            case 'cfbill':{
              if(isset($_POST['submitmuahang'])){

                if(isset($_SESSION['checkus'])){$iduser= $_SESSION['checkus']['id_kh'];}
                else{ $iduser= 0;}
                  $name = $_POST['hoten'];
                  $email = $_POST['mail'];
                  $diachi = $_POST['address'];
                  $sdt = $_POST['numberphone'];
                  $datedh = date('Y-m-d');
                  $tongbill = tongbill();
                  $pttt = $_POST['pttt'];
                  $id = add_bill($name,$email,$diachi,$sdt,$pttt,$datedh,$tongbill,$iduser);

                  foreach($_SESSION['myhd'] as $cart){
                    add_cart($_SESSION['checkus']['id_kh'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$id);
                  }
                  $_SESSION['myhd'] = [];
              }
              $listbill = loadone_bill($id);
              $billct = loadone_card($id);
              include 'config/cfbill.php';
              break;
            }
            case 'spgiamgia':{
              $spgg = all_spham_giamgia();
              break;
            }
            // COm Bo
            case 'combo':{
              $cb = get_allcombo();  
              include 'config/allcombo.php';
              break;
            }
            case 'donhang':{
              if(isset($_SESSION['checkus']['id_kh']) && $_SESSION['checkus']['id_kh']>0){
                  $lsmuahang = getall_billhoadon($_SESSION['checkus']['id_kh']);
              }
              include './config/donhang.php';
              break;
            }
            case 'ctdh':{
              if(isset($_GET['iddh'])&&($_GET['iddh'])){
                  $id = $_GET['iddh'];
              }
              $listbill = loadone_bill($id);
              $billct = loadone_card($id);
              include 'config/chitietdh.php';
              break;
            }




            // combo
            case 'chitietcombo':{
              if(isset($_GET['idcombo'])&&($_GET['idcombo'])){
                $dscombodetails = getone_combodetail($_GET['idcombo']);
                $spdt = getone_combo_id($_GET['idcombo']);
            }

        
              
              include './config/chitietcombo.php';
              break;
            }
            case 'chitiettk':{
              if(isset($_GET['idkh'])&&($_GET['idkh'])){
                $tk = getone_khachhang($_GET['idkh']);
              } else {
                header('location: ?act=login');
              }
              include 'config/chitiettk.php';
              break;
            
            }
            case 'binhluan':{
              if(isset($_POST['btnbinhluan'])){
                $idsp = $_POST['idspbl'];
                $noidung = $_POST['inputbinhluan'];
                $idkhach = $_SESSION['checkus']['id_kh'];
                $dae = date('Y-m-d');
                add_binhluan($noidung,$idkhach,$dae,$idsp);
                header('location: ?act=allsp');

              }
              
              break;
            }
            case 'delbl':{
              if(isset($_GET['idbl']) && ($_GET['idbl'])){
                del_binhluan($_GET['idbl']);
                header('location: ?act=allsp');
              }
              break;
            }

            case 'huydh':{
              if(isset($_GET['iddh']) && ($_GET['iddh'])){
                doi_ttdh($_GET['iddh']);
                header('location: ?act=donhang');
              }
              break;
            }
            case 'nhanhang':{
              if(isset($_GET['iddh']) && ($_GET['iddh'])){
                nhanhang($_GET['iddh']);
                header('location: ?act=donhang');
              }
            }





            default:{
              include 'trangchu/home.php';
              break;
            }





          } 
         }else{
            include 'trangchu/home.php';
         }


  
  ?>

    <?php include 'config/footer.php'?>


    </main>





    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>