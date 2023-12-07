<div class="container">
  <a href="?act=ctdh"><< Back</a>
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
      <td style="color:red"><?php echo $dscombodetails['discout']?> %</td>
      <td>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">Tên sp</th>
      <th scope="col">img sp</th>
      <th scope="col">Giá</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $giatong = 0;
    foreach($spdt as $spdt):?>
    <tr>
      <td><?php echo $spdt['name_details']?></td>
      <td><img style="border-radius: 5px;" width="50px" height="50px" src="../uploads/<?php echo $spdt['img_details']?>" alt="Loi"></td>
      <td><?php echo number_format($spdt['gia_sp'])?> VND</td>
      <?php $giatong += $spdt['gia_sp']?>

      
    </tr>
    <?php endforeach;?>
    <tr>
      <td>Tổng Giá: </td>
      <td><?php 
        $giadagiam = $giatong-($dscombodetails['discout'] * $giatong / 100);
      ?></td>
      <td><p style="text-decoration: line-through;" ><?php echo number_format($giatong)?> VND</p><p style="color:red" ><?php echo number_format($giadagiam)?> VND</p> </td>
      <td></td>
    </tr>
    
  </tbody>

</table>

      </td>
    </tr>
    
  </tbody>
</table>
</div>