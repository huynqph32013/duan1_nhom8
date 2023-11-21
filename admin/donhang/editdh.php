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

      <td><?php echo $onebil['ten_kh']?></td>
      <td><?php echo $onebil['email']?></td>
      <td><?php echo $onebil['diachi']?></td>
      <td><?php echo $onebil['sdt']?></td>
      <td><?php echo pttt($onebil['pttt'])?></td>
      <td><?php echo $onebil['ngaydh']?></td>
      <td><?php echo number_format($onebil['total'])?> VND</td>
      <form action="?act=editdh" method="post">
        <input type="hidden" name="idbill" value="<?php echo $onebil['id_bill']?>">
      <td><select name="giaohanghh" id="">
        <?php for($i=0; $i<4; $i++): ?>            
            <option value="<?= $i?>" <?= ($listbill['chitietbill']==$i)?'selected':''?>>
                <?php
                 if ($i == 0) {
                    echo 'Đang xác nhận';
                 } else if($i==1) {
                    echo 'Đang Xử lý';
                 }
                 else if($i==2) {
                    echo 'Đang Giao Hàng';
                 }
                 else if($i==3) {
                    echo 'Đã Giao Hàng';
                 }
                ?>
            </option>
        <?php endfor ?>
      </select></td>
      
      <td><button type="submit" name="submitct" class="btn btn-primary">Button</button></td>
      </form>
    </tr>
    
  </tbody>
</table>
    </div>
</div>