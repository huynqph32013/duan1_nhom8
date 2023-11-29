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

    <div class="row">
        <h2 style="text-align: center;">Thống Kê Sản Phẩm</h2>
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
</div>