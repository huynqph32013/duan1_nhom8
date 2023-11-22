
<div class="container">
    <div class="hgish"></div>
    <div style="margin-top: 100px;" class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tên khách hàng</th>
      <th scope="col">email</th>
      <th scope="col">Địa Chỉ</th>
      <th scope="col">SDT</th>
      <th scope="col">Thanh Toán</th>
      <th scope="col">Ngày Đặt</th>
      <th scope="col">Tổng giá</th>
      <th scope="col">Chi Tiết</th>
      <th>Hủy</th>
      <th>Nhận</th>
      <th scope="col" style="text-align: center;" >Đơn Hàng</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($lsmuahang as $value):?>
    <tr>
        <td><?php echo $value['id_bill']?></td>
      <td><?php echo $value['ten_kh']?></td>
      <td><?php echo $value['email']?></td>
      <td><?php echo $value['diachi']?></td>
      <td><?php echo $value['sdt']?></td>
      <td><?php echo pttt($value['pttt'])?></td>

      <td><?php echo $value['ngaydh']?></td>
      <td><?php echo number_format($value['total'])?> VND</td>
   
      
      <td><?php echo giaohang($value['chitietbill'])?></td>
      <td><?php if($value['chitietbill']== 0):?><a href="?act=huydh&iddh=<?php echo $value['id_bill']?>">Hủy</a><?php endif;?></td>
        <td style="text-align: center;" >
      <?php if($value['chitietbill']==2):?>
      <a href="?act=nhanhang&iddh=<?php echo $value['id_bill']?>">Nhận</a>  
      <?php endif;?>

      </td>
      <td style="text-align: center;" >

      <a href="?act=ctdh&iddh=<?php echo $value['id_bill']?>">Xem</a>
      </td>
  
    </tr>
    <?php endforeach?>
   
  </tbody>
</table>
    </div>
</div>