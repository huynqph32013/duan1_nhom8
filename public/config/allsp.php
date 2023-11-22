<div class="wrapper">
    <div class="maindm">
      
        <div class="row sp">
        <a style="text-decoration: underline;" href="?act=home">< Back</a>



          <div class="col-3">
               
                <br>
                <div class="row">
                  <h4 style="text-align: center;">Danh Mục</h4>
                  <?php foreach($dsdm as $value):?>
                  <div style="text-align: center;" class="col-12">
                    <a id="hoverm" href="?act=showdm&iddm=<?php echo $value['id_dm']?>"><?php echo $value['ten_dm']?></a>
                  </div>
                  <hr>
                  <?php endforeach;?>
                </div>
                <h3 style="text-align: center;margin-top:50px">Lọc</h3>
               <form action="?act=timkiemsp" method="post">
                    <div style="margin-top: 20px;" class="boxinput">
                    <div class="form-outline">
                    <input type="text" id="form12" name="namesp" class="form-control" />
                    <label class="form-label" for="form12">Tên Sản Phẩm</label>
                    </div>
                    </div>
                    <!--  -->
             

                  <!-- Checked checkbox -->
                  <div style="margin-top: 20px ;text-align:center" class="form-check">
                  <label class="form-check-label" for="flexCheckChecked">Các Sản Phẩm Giảm Giá</label>
                  <input class="form-check-input" type="checkbox" name="giamgiacb" value="" id="flexCheckChecked" checked/>
                  </div>
                    <!--  -->



                    <!--  -->
                    <div class="row">
                     <div class="col-12">
                    <select class="form-select form-select-sm" name="giatien" aria-label="Small select example">
                    <option value="0" selected>Chọn Giá</option>
                    <option value="1">0 VND - 100.000 VND</option>
                    <option value="2">100.000 VND - 200.000 VND</option>
                    <option value="3">200.000 VND - 500.000VND</option>
                    <option value="4">500.000VND - 1.000.000VND</option>
                    <option value="5"> > 1.000.000 NVD</option>
                    </select>
                    </div>
                    </div>
                    <!--  -->
                      <div style="margin-top: 50px;" class="row">
                      <div class="col-6"></div>
                    <div class="col-4">
                    <button type="submmit" name="btnsearch" class="btn btn-primary">Lọc</button>
                    </div>
                
                      </div>
                      <hr>
               </form>
               <div class="row">
                   <?php 
                        include 'addhoadon.php';
                   ?>
               </div>
          </div>
          




          <div class="col-9">
            <div class="row product">
              <?php foreach($danhmuc as $value):?>
              <div style="margin-top: 20px;" class="col-3">
              <div class="card">
  <img src="../uploads/<?php echo $value['image']?>" height="200px" class="card-img-top" alt=""/>
  <div class="card-body">
    <h5 class="card-title"><a href="?act=chitietsp&idsp=<?php echo $value['id_sp']?>"><?php echo $value['name_sp']?></a></h5>
    <p class="card-text"><strong>Giá gốc</strong>: <?php echo number_format($value['gia'])?> VND</p>
    <p class="card-text"><strong>Giảm Giá</strong> : <?php echo $value['giam_gia']?> %</p>
   
    <p class="card-text"><strong>Giá</strong> : <?php 
    $tt = $value['gia']  - (($value['gia'] * $value['giam_gia']) / 100);?>
   <?php  echo number_format($tt);?> VND</p>


   <form action="?act=hoadon" method="post">
            <input type="hidden" name="idsp" value="<?php echo $value['id_sp'];?>">
            <input type="hidden" name="tensp" value="<?php echo $value['name_sp'];?>">
            <input type="hidden" name="img" value="<?php echo $value['image'];?>">
            <input type="hidden" name="gia" value="<?php echo $value['gia'];?>">
    <div class="row">
      
      <div class="col-6"><a href="?act=chitietsp&idsp=<?php echo $value['id_sp']?>" class="btn btn-primary" >Xem</a></div>
      <div class="col-4"><button type="submit" name="submitmua" class="btn btn-primary btn-block mb-4">Mua</button></div>
    </div>
   </form>
  </div>
      
  </div>
  
              </div>

             
              <?php endforeach;?>

            </div>
          </div>
        </div>
            
    </div>
</div>