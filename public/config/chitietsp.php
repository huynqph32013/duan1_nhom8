<div style="background-color:#F5F5F5" class="mainss">

  <div style="padding-top: 100px;" class="hih"></div>

  <div class="container">
    <a href="?act=allsp">
      << back</a>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-8">
            <div class="row">
              <div class="col-4"> <img style="border-radius: 10px;" width="100%" height="300px" src="../uploads/<?php echo $sanpham['image'] ?>" alt=""></div>
              <div class="col-1"></div>
              <div class="col-7">
                <p>Hà Nội - Nam Từ Liêm - Xuân Phương</p>
                <h4><?php echo $sanpham['name_sp'] ?></h4>
                <br>

                <p style="font-size: 20px;text-decoration:line-through;color:red">Giá gốc : <?php echo number_format($sanpham['gia']) ?> VND</p>

                <p style="font-size: 20px;">Giảm Giá : <?php echo $sanpham['giam_gia'] ?> %</p>

                <p style="font-size: 20px;">Giá chỉ còn : <?php $tt = $sanpham['gia'] - ($sanpham['gia'] * $sanpham['giam_gia'] / 100);
                                                          echo number_format($tt) ?> VND</p>
                <br>
                <p><?php echo $sanpham['mo_ta'] ?></p>



                <div class="row">
                  <form action="?act=hoadon" method="post">
                    <input type="hidden" name="idsp" value="<?php echo $sanpham['id_sp']; ?>">
                    <input type="hidden" name="tensp" value="<?php echo $sanpham['name_sp']; ?>">
                    <input type="hidden" name="img" value="<?php echo $sanpham['image']; ?>">
                    <input type="hidden" name="gia" value="<?php echo $sanpham['gia']; ?>">
                    <div class="col-4"></div>
                    <div class="col-4"><button type="submit" name="submitmua" class="btn btn-primary">Mua Ngay</button></div>
                    <div class="col-4"></div>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-2"></div>
        </div>
  </div>

  <div style="padding-bottom: 100px;" class="hhh"></div>
  <hr>
</div>






<div class="container">
  <div class="row">
    <h3 style="text-align:center;margin-top:50px">Sản Phẩm Liên Quan</h3>
  </div>
</div>



<?php if (isset($_SESSION['checkus']) && ($_SESSION['checkus'])) : ?>

<?php include 'binhluan.php'?>




 <?php endif; ?>



          <div style="margin-top: 100px;" class="row">

            <div class="container mt-5">

              <div class="row  d-flex justify-content-center">

                <div class="col-md-8">

                  <div class="headings d-flex justify-content-between align-items-center mb-3">
                    <h5>Số Bình Luận (<?php echo count($bl) ?>)</h5>

                    <div class="buttons">

                      <span class="badge bg-white d-flex flex-row align-items-center">
                        <span class="text-primary">Comments "ON"</span>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>

                        </div>
                      </span>

                    </div>

                  </div>


                  <?php foreach ($bl as $value) : ?>
                    <div style="margin-top: 20px;" class="card p-3">

                      <div class="d-flex justify-content-between align-items-center">

                        <div class="user d-flex flex-row align-items-center">

                          <img src="../uploads/<?php echo $value['image'] ?>" width="30" class="user-img rounded-circle mr-2">
                          <span><small class="font-weight-bold text-primary"><?php echo $value['fullname'] ?></small> <small class="font-weight-bold"> : <?php echo $value['noi_dung'] ?></small></span>

                        </div>


                        <small>
                          <p><?php echo $value['ngay_cmt'] ?></p>
                        </small>

                      </div>


                      <div class="action d-flex justify-content-between mt-2 align-items-center">

                        <div class="reply px-4">
                          <small><?php if (isset($_SESSION['checkus']) && ($_SESSION['checkus'])) {
                                    if ($_SESSION['checkus']['id_kh'] == $value['id_user']) {
                                  ?><a href="?act=delbl&idbl=<?php echo $value['id_bl'] ?>">Xóa</a>
                                <?php
                                    }
                                  } else {
                                ?><?php
                                  }

                                  ?> </small>
                          <span class="dots"></span>
                          <small>Trả Lời</small>
                          <span class="dots"></span>


                        </div>

                        <div class="icons align-items-center">

                          <i class="fa fa-star text-warning"></i>
                          <i class="fa fa-check-circle-o check-icon"></i>

                        </div>

                      </div>
                      </div>
                  
                            
      <?php endforeach; ?>


                
              </div>

            </div>








          </div>
</div>
