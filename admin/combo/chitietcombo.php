<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tên Combo</th>
      <th scope="col">Ảnh combo</th>
      <th scope="col">Mô Tả combo</th>
      <th scope="col">Giảm Giá</th>
      <th scope="col">Sản Phẩm</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td><?php echo $dscombodetails['ten_combo']?></td>
      <td><img style="border-radius: 5px;" width="50px" height="50px" src="../uploads/<?php echo $dscombodetails['imgcombo']?>" alt="Loi"></td>
      <td><?php echo $dscombodetails['mo_ta']?></td>
      <td><?php echo $dscombodetails['discout']?></td>
      <td>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">Tên sp</th>
      <th scope="col">img sp</th>
      <th scope="col">Giá</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $dscombodetails['name_details']?></td>
      <td><img style="border-radius: 5px;" width="50px" height="50px" src="../uplaods/<?php echo $dscombodetails['img_details']?>" alt="Loi"></td>
      <td><?php echo $dscombodetails['gia_sp']?></td>
    </tr>
    
  </tbody>
</table>

      </td>
    </tr>
    
  </tbody>
</table>
</div>