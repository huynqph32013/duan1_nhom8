<div class="wrappercfbill">
 <div class="lsjdfhas"></div>
    <div style="margin-top: 200px;" class="container">
        <div class="thanks">

        </div>
   

<div class="container">
    <div class="row">
    <h2 style="text-align:center">Cảm Ơn Quý Khách Đã Đặt Hàng</h2>
            <h2 style="text-align:center">Đơn Hàng</h2></div>
   
                <div style="text-align: center;" class="row">
                    <div class="col-4"></div>
                    <div class="col-2">Mã Đơn Hàng: </div>
                    <div class="col-2">YUHN-<?php echo $listbill['id_bill']?></div>
                    <div class="col-4"></div>
                </div>
                <div style="text-align: center;" class="row">
                    <div class="col-4"></div>
                    <div class="col-2">Ngày Đặt Hàng:  </div>
                    <div class="col-2"><?php echo $listbill['ngaydh']?></div>
                    <div class="col-4"></div>
                </div>
                <div style="text-align: center;" class="row">
                    <div class="col-4"></div>
                    <div class="col-2">Tổng Đơn Hàng:  </div>
                    <div class="col-2"> <?php echo number_format($listbill['total'])?> VND</div>
                    <div class="col-4"></div>
                </div>
                <div style="text-align: center;" class="row">
                    <div class="col-4"></div>
                    <div class="col-2">Mã Đơn Hàng: </div>
                    <div class="col-2">YUHN-<?php echo $listbill['id_bill']?></div>
                    <div class="col-4"></div>
                </div>
                <div style="text-align: center;" class="row">
                    <div class="col-4"></div>
                    <div class="col-2">Phương Thức Thanh Toán:  </div>
                    <div class="col-2"><?php switch($listbill['pttt']){case 1:{
                    echo 'Tiền Mặt';
                    break;
                    } 
                    case 2:
                    {echo 'Online Banking';
                    break;
                    } 
                    case 3:
                    {echo 'Thẻ Ghi Nợ (Visa)';
                    break; }
                    default: {
                        echo 'Tiền Mặt';
                        break;
                    }
                    }?></div>
                    <div class="col-4"></div>
                </div>
                <div style="margin-top: 100px;" class="row">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Họ Tên</th>
      <th scope="col">Email</th>
      <th scope="col">Số Điện Thoại</th>
      <th scope="col">Địa Chỉ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td><?php echo $listbill['ten_kh']?></td>
      <td><?php echo $listbill['email']?></td>
      <td><?php echo $listbill['sdt']?></td>
      <td><?php echo $listbill['diachi']?></td>
    </tr>
   
  </tbody>
    </table>
 </div>
   
    <!-- chi tiet sp -->
    
<?php
$tong = 0;
$tongcb = 0;
$tongsp = 0;
$sl = count($listcombo)+count($billct);


?>
<?php if(isset($listcombo)&&($listcombo)):?>
    <div style="margin-top: 50px;" class="row">
      <h2 style="text-align: center;">Combo</h2>
      
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Ảnh combo</th>
      <th scope="col">Tên combo</th>
      <th scope="col">số lượng</th>
      <th scope="col">giảm giá</th>
      <th scope="col">Giá</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($listcombo as $value):?>
  <tr>
      <td><img width="50px" src="../uploads/<?php echo $value['img_combo']?>" alt=""></td>
      <td><?php echo $value['ten_combo']?></td>
      <td><?php echo $value['sl_combo']?></td>
      <td><?php echo $value['dis_combo']?> %</td>
      <td><p style="text-decoration: line-through;color:red"><?php echo number_format($value['gia_combo']) ?> VND</p>  
      <p><?php echo number_format($value['gia_combo'] - (( $value['gia_combo']*$value['dis_combo']/100) * $value['sl_combo']))?> VND</p> </td>
    </tr>
    <?php 
      $tongcb += $value['gia_combo'] - (( $value['gia_combo']*$value['dis_combo']/100) * $value['sl_combo']);
      
    ?>
<?php endforeach;?>
  
  </tbody>
</table>
      </div>
      <?php endif;?>
    


 
    <div style="margin-top: 50px;" class="row">
<h2 style="text-align: center;">Chi Tiết Sản Phẩm</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ảnh Sản Phẩm</th>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Số Lượng</th>
      <th scope="col">Tổng Tiền</th> 
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 0;
    $tong = 0;
    
    foreach($billct as $value){
        ?>
    <tr>
      <td><img width="50px" src="../uploads/<?php echo $value['img']?>" alt="heeh"></td>
      <td><?php echo $value['name']?></td>
      <td><?php echo $value['sl'];?></td>
      <td><?php echo number_format($value['sl']*$value['price']);?></td>
    </tr>
        <?php
        $i++;
        $tongsp += ($value['sl'] * $value['price']);
       
        
    }

$tong = $tongcb + $tongsp;
  ?>
    <tr>
      <td></td>
      <td></td>
      <td>Tổng Tiền</td>
      <td><?php echo number_format($tong)?> VND</td>
    </tr>

   
  </tbody>
</table>

</div>
         <div style="margin-top: 50px;margin-bottom: 50px" class="row">
            <div class="col-9"></div>
            <div class="col-3">
                <a href="?act=allsp"> << Trở về</a>
            </div>
         </div>
            </div>
    </div>
</div>

    
