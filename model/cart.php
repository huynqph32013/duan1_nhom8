<?php 
function tongbill(){
    $tong = 0; 
    foreach($_SESSION['myhd'] as $cart):
          $ttien = $cart[3]*$cart[4];
          $tong += $ttien;
  endforeach;
return $tong;
}

function add_bill($name,$email,$diachi,$sdt,$pttt,$ngaydh,$tongdh,$iduser){
  $sql = "insert into `bill`(`ten_kh`,`email`,`diachi`,`sdt`,`pttt`,`ngaydh`,`total`,`iduser`) values('$name','$email','$diachi','$sdt','$pttt','$ngaydh','$tongdh','$iduser')";
  return pdo_execute_id($sql);
}

function add_cart($iduser,$idpro,$img,$name,$price,$sl,$tt,$idbill){
    $sql = "insert into `cart`(`iduser`,`idpro`,`img`,`name`,`price`,`sl`,`tt`,`idbill`) values('$iduser','$idpro','$img','$name','$price','$sl','$tt',$idbill)";
   pdo_execute($sql);
  }


  function loadone_bill($idbill){
    $sql = "select * from bill where id_bill = $idbill";
    $result = pdo_query_one($sql);
    return $result;
}

function loadone_card($idbill){
    $sql = "select * from cart where idbill = $idbill";
    $result = pdo_query($sql);
    return $result;
}
function getall_billhoadon($id){
  $sql = "select * from `bill` where `iduser` = $id";
  $result = pdo_query($sql);
  return $result;
}

function pttt($n){
  switch($n){
   
    case 1: echo "Tiền Mặt";break;
    case 2: echo "Online Banking";break;
    case 3: echo "Thẻ Visa";break;
    default : echo "Tiền Mặt";break;
  }
}

function giaohang($n){
  switch($n){
    case 0: echo "Đang Xác Nhận";break;
    case 1: echo "Đang Xử Lý";break;
    case 2: echo "Đang Giao Hàng";break;
    case 3: echo "Đã Nhận Hàng";break;
    case 4: echo "Đã Hủy";break;
    default : echo "Đang Xác Nhận";break;
  }
}

function getall_dh(){
  $sql = "select * from bill";
  $result = pdo_query($sql);
  return $result;
}
function thaydoi_trangthai($ttgh,$idbill){
  $sql = "update `bill` set `chitietbill`='$ttgh' where `id_bill` = $idbill";
  pdo_execute($sql);
}


function chitietdh($n){
  switch ($n) {
          case 0: 
              $tt = 'Đang Xác Nhận';
              break;
          case 1:
              $tt = 'Đang Xử Lý';
              break;
          case 2:
              $tt = 'Đang Giao Hàng';
              break;
          case 3: 
              $tt = 'Đã Nhận Hàng';
              break;
          case 4: 
            $tt = 'Đã Hủy';
            break;

          default:
              $tt = 'Đang Xác Nhận';
              break;
  }
  return $tt;
}

function doi_ttdh($iddh){
  $sql = "update `bill` set `chitietbill`= 4 WHERE  `id_bill` = $iddh";
  pdo_execute($sql);
}


function nhanhang($iddh){
  $sql = "update `bill` set `chitietbill`= 3 WHERE  `id_bill` = $iddh";
  pdo_execute($sql);
}
?>