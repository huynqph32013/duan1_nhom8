<div style="margin-top: 100px;" class="container">
<a href="?act=addcombo">Thêm Combo Mới</a>
    <div style="margin-top: 50px;" class="row">

    <table style="text-align: center;" class="table">
  <thead>
    <tr>
        <th></th>
      <th scope="col">ID Combo</th>
      <th scope="col">Tên Combo</th>
      <th scope="col">imgcombo</th>
      <th scope="col">Giảm Giá</th>
      <th scope="col">Mô Tả</th>

      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($combo as $value):?>
    <form action="?act=delcombo" method="post">
    <tr>
        <th><input type="checkbox" name="slcombo[]"></th>
      <th scope="row"><?php echo $value['id_combo']?></th>
      <td><?php echo $value['ten_combo']?></td>
      <td><img width="50px" height="50px" src="../uploads/<?php echo $value['imgcombo']?>" alt=""></td>
      <td><?php echo $value['discout']?></td>
      <td><?php echo $value['mo_ta']?></td>

      <td><a style="text-decoration: none;color:black" href="?act=editcombo&idcombo=<?php echo$value['id_combo']?>">Sửa</a> | <a style="text-decoration: none;color:black" href="?act=delcombo&idcombo=<?php echo$value['id_combo']?>">Xóa</a></td>
    </tr>
    </form>
    <?php endforeach;?>


  </tbody>
</table>

</div>