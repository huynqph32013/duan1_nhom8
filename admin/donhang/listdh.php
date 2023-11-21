<div class="container">
    <div class="row">
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
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($dsdh as $dh):?>
    <tr>
      <form action="?act=updatedh" method="POST"></form>
      <td><?php echo $dh['id_bill']?></td>
      <td><?php echo $dh['ten_kh']?></td>
      <td><?php echo $dh['email']?></td>
      <td><?php echo $dh['diachi']?></td>
      <td><?php echo $dh['sdt']?></td>
      <td><?php echo pttt($dh['pttt'])?></td>

      <td><?php echo $dh['ngaydh']?></td>
      <td><?php echo number_format($dh['total'])?> VND</td>
   
      
      <td><?php echo giaohang($dh['chitietbill'])?></td>
      <td><a href="?act=chitietdonhang&iddh=<?php echo $dh['id_bill']?>">Xem</a></td>

    </tr>
    <?php endforeach;?>
  </tbody>
</table>
    </div>
</div>