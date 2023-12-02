<div id="wrappersp">
    <h2>Danh Sách Sản Phẩm</h2>
    
    <div class="mainspp">
    <h4><a href="?act=addsp">Thêm Sản Phẩm</a></h4>
    </div><br>


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">giá</th>
      <th scope="col">giảm giá</th>
      <th scope="col">ảnh</th>
      <th scope="col">ngày đăng</th>
      <th scope="col">view</th>
      <th scope="col">mô tả</th>
      <th scope="col">actione</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($dssp as $value):?>
    <tr>
      <th scope="row"><?php echo $value['id_sp']?></th>
      <td><?php echo $value['name_sp']?></td>
      <td><?php echo number_format($value['gia'])." VND"?></td>
      <td><?php echo $value['giam_gia']?></td>
      <td><img width='70px' src="<?php echo '../uploads/'.$value['image']?>" alt=""></td>
      <td><?php echo $value['date']?></td>
      <td><?php echo $value['luot_xem']?></td>
      <td><?php echo $value['mo_ta']?></td>
      <td>
        <a href="?act=delsp&idsp=<?php echo $value['id_sp']?>">Xóa</a>
        <a href="?act=editsp&idsp=<?php echo $value['id_sp']?>">Sửa</a>
      </td>
      
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>