<div class="wrapper">
    <div class="maindm">
      
        <div class="row sp">
        <a style="text-decoration: underline;" href="?act=home">< Back</a>



          <div class="col-3">
               
 
                <h3 style="text-align: center;margin-top:50px">Lọc</h3>
               <form action="?act=timkiemsp" method="post">

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
                    <button type="submmit" name="btnsearch" class="btn btn-primary">Button</button>
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
          



<div class="col-1"></div>
          <div class="col-8">
            <div class="row product">
                <?php if(isset($cb)&& ($cb)){?>
              <?php foreach($cb as $value):?>
               
              <div class="col-6">
              <div class="card">
  <img src="../uploads/<?php echo $value['imgcombo']?>" height="200px" class="card-img-top" alt=""/>
  <div class="card-body">
    <h5 class="card-title"><a href="?act=chitietsp&idsp=<?php echo $value['id_combo_details']?>"><?php echo $value['ten_combo']?></a></h5>
    <p><?php $value['mo_ta']?></p> 
    <p class="card-text"><strong>Giảm Giá</strong> : <?php echo $value['discout']?> %</p>
   

 <div style="text-align: center;" class="row">
 <div class="col-6"><a href="?act=chitietcombo&idcombo=<?php echo $value['id_combo_details']?>" class="btn btn-primary" >Xem</a></div>
      <div class="col-6"><button type="submit" name="submitmua" class="btn btn-primary btn-block mb-4">Mua</button></div>
 </div>
    </div>
   </form>
  </div>
      
  </div>
  <?php endforeach;?>

  
</div>

             
           
              <?php } else {
                ?>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6"><h3>Chưa Có Combo nào</h3></div>
                        <div class="col-3"></div>
                    </div>
                <?php
              }
              ?>
            </div>



          </div>
        </div>
            
    </div>
</div>