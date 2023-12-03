<div class="container">
    <div class="row">
        <h2 style="text-align: center;">Thống Kê Danh Muc</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Danh Mục</th>
      <th scope="col">Số Sản Phẩm</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($tk as $value): ?>
        
    <tr>
      <th scope="row"><?php echo $value['id_dm']?></th>
      <td><?php echo $value['ten_dm']?></td>
      <td><?php echo $value['sl']?></td>
      <td>...</td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
    </div>



    
    <div style="margin-top: 100px;" class="row">
        <h2 style="text-align: center;">10 Sản Phẩm View Cao</h2>
    <table style="margin-top: 50px;" class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Giảm Giá</th>
      <th scope="col">Giá</th>
      <th scope="col">Chỉ còn</th>
      <th scope="col">Lượt Xem</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($top10sp_view as $value): ?>
        
    <tr>
      <th scope="row"><?php echo $value['id_sp']?></th>
      <td><?php echo $value['name_sp']?></td>
      <td><img width="50px" height="50px" src="../uploads/<?php echo $value['image']?>" alt="hehe"></td>
      <td><?php echo $value['giam_gia']?> %</td>
      <td><?php echo number_format($value['gia'])?> VND</td>
      <td><?php echo number_format($value['gia'] - ($value['gia']*$value['giam_gia']/100))?> VND</td>
      <td><?php echo $value['luot_xem']?></td>

    </tr>
    <?php endforeach;?>
  </tbody>
</table>
    </div>
</div>