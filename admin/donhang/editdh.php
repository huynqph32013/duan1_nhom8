<div class="container">
  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Tên Khách Hàng</th>
          <th scope="col">Email</th>
          <th scope="col">Địa Chỉ</th>
          <th scope="col">SDT</th>
          <th scope="col">Thanh Toán</th>
          <th scope="col">Ngày Đặt</th>
          <th scope="col">Tổng Bill</th>
          <th scope="col">Tình Trạng</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <td><?php echo $onebil['ten_kh'] ?></td>
          <td><?php echo $onebil['email'] ?></td>
          <td><?php echo $onebil['diachi'] ?></td>
          <td><?php echo $onebil['sdt'] ?></td>
          <td><?php echo pttt($onebil['pttt']) ?></td>
          <td><?php echo $onebil['ngaydh'] ?></td>
          <td><?php echo number_format($onebil['total']) ?> VND</td>
          <form action="?act=editdh" method="post">
            <input type="hidden" name="idbill" value="<?php echo $onebil['id_bill'] ?>">
            <td><?php if ($listbill['chitietbill'] == 4) {
                ?>
                <p>Đã Hủy</p>
              <?php
                } else {
              ?>
                <select name="giaohanghh" id="">
                  <?php for ($i = 0; $i < 4; $i++) : ?>
                    <option value="<?= $i ?>" <?= ($listbill['chitietbill'] == $i) ? 'selected' : '' ?>>
                      <?php
                      if ($i == 0) {
                        echo 'Đang xác nhận';
                      } else if ($i == 1) {
                        echo 'Đang Xử lý';
                      } else if ($i == 2) {
                        echo 'Đang Giao Hàng';
                      } else if ($i == 3) {
                        echo 'Đã Giao Hàng';
                      }
                      ?>
                    </option>
                  <?php endfor ?>
                </select>



            </td>
            <td><button type="submit" name="submitct" class="btn btn-primary">Button</button></td>
          <?php  } ?>




          </form>
        </tr>

      </tbody>
    </table>
  </div>


<div class="row">
  
<table class="table">
    <thead>
      <tr>
        <th scope="col">Ảnh sản phẩm</th>
        <th scope="col">Tên Sản Phẩm</th>
        <th scope="col">Giá</th>
        <th scope="col">Số Lượng</th>
        <th></th>
    
      </tr>
    </thead>
    <tbody>


      <?php
      if (isset($combo) && is_array($combo)) {
        $price_combo = 0;
        foreach ($combo as $value) :
          $price_combo += $value['gia_combo']*$value['sl_combo'];
      ?>
          <tr>
            <td><img width="40px" src="../uploads/<?php echo $value['img_combo']?>" alt=""></td>
            <td><?php echo $value['ten_combo']?></td>
            <td><?php echo number_format($value['gia_combo'])?> VND</td>
            <td><?php echo $value['sl_combo']?></td>
            <td>
                  <a href="?act=cctcombo&id=<?php echo $value['id_combo'];?>">Xem Chi Tiết</a>
            </td>
          </tr>
      <?php
        endforeach;
      }

      ?>


<?php
      if (isset($sanpham) && is_array($sanpham)) {
        $price_sanpham = 0;
        foreach ($sanpham as $value) :
          $price_sanpham += $value['price']*$value['sl'];
      ?>
          <tr>
            <td><img width="40px" src="../uploads/<?php echo $value['img']?>" alt=""></td>
            <td><?php echo $value['name']?></td>
            <td><?php echo number_format($value['price'])?> VND</td>
            <td><?php echo $value['sl']?></td>
            <td></td>
          </tr>
      <?php
        endforeach;
      }

      ?>
    </tbody>
  </table>

</div>
<div class="row">
  <div class="col-8"></div>
  <div class="col-4">
    Tổng Tiền :  <?php echo number_format($price_combo+$price_sanpham)?> VND
  </div>
</div>

</div>