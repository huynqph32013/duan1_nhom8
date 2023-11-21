<div class="wrapper">
    <div class="eief">

    </div>
<div class="mainsp">
    <a href="?act=allsp"><< back</a>
    <div class="cartsp row">
        <div class="imgsp col-5">
            <img width="100%" height="500px" src="../uploads/<?php echo $sanpham['image']?>" alt="">
        </div>
        <div class="col-7">
            <h2 style="text-align: center;"><?php echo $sanpham['name_sp']?></h2>
            <h3><?php echo $sanpham['name_sp']?></h3>
            <p style="font-size: 25px;" >Thông tin sản phẩm :</p>
            <p style="font-size: 25px;">Giá gốc : <?php echo $sanpham['gia']?> </p>
           
            <p style="font-size: 25px;">Giảm Giá : <?php echo $sanpham['giam_gia']?> %</p>

            <p style="font-size: 30px;">Giá chỉ còn : <?php $tt = $sanpham['gia'] - ($sanpham['gia']*$sanpham['giam_gia']/100);
            echo number_format($tt)?> VND</p>
             <h5><?php echo $sanpham['mo_ta']?></h5>
            <div class="row">
            <form action="?act=hoadon" method="post">
            <input type="hidden" name="idsp" value="<?php echo $sanpham['id_sp'];?>">
            <input type="hidden" name="tensp" value="<?php echo $sanpham['name_sp'];?>">
            <input type="hidden" name="img" value="<?php echo $sanpham['image'];?>">
            <input type="hidden" name="gia" value="<?php echo $sanpham['gia'];?>">
                <div class="col-4"></div>
                <div class="col-4"><button type="submit" name="submitmua" class="btn btn-primary">Mua Ngay</button></div>
                <div class="col-4"></div>
            </form>
            </div>
        </div>
    </div>

</div>


<?php if(isset($_SESSION['checkus'])&&($_SESSION['checkus'])):?>
<div  class="row">
        <div class="col-3"></div>
        <div class="col-6"><?php include 'binhluan.php'?></div>
        <div class="col-3"></div>
</div>
<?php endif;?>
<div style="margin-top: 50px;" class="row">
    <div class="col-2"></div>
    <div style="background-color: #F5F5F5;" class="col-8">




<!--  -->



<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Tên</th>
      <th>Nội Dung</th>
      <th>Ngày Bình Luận</th>
      <th></th>

      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($bl as $value):?>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="../uploads/<?php echo $value['image']?>"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $value['fullname']?></p>
            <p class="text-muted mb-0"><?php echo $value['email']?></p>
          </div>
        </div>
      </td>
      <td>
    <p><?php echo $value['noi_dung']?></p>
      </td>
      <td>
       <p><?php echo $value['ngay_cmt']?></p>
      </td>
        <?php if(isset($_SESSION['checkus'])&& ($_SESSION['checkus'])){
            if($_SESSION['checkus']['id_kh']==$value['id_user']){
                ?><td><a href="?act=delbl&idbl=<?php echo $value['id_bl']?>">Xóa</a></td>
                <?php
            }
        } else {
            ?><td></td><?php
        }
        
        ?>
    </tr>
    <?php endforeach;?>
    
  </tbody>
</table>
<!--  -->



</div>
    <div class="col-2"></div>

</div>




