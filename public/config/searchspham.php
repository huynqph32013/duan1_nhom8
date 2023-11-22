<div class="wrapper">
    <div class="maindm">
      <a style="text-decoration: underline;" href="?act=allsp">< Back</a>
        <div class="row sp">
          <div class="col-3">
                
          </div>
          <div class="col-9">
            <div class="row product">
              <?php foreach($dsdp as $value):?>
              <div class="col-3">
              <div class="card">
  <img src="../uploads/<?php echo $value['image']?>" height="200px" class="card-img-top" alt=""/>
  <div class="card-body">
    <h5 class="card-title"><?php echo $value['name_sp']?></h5>
    <p class="card-text"><?php echo number_format($value['gia'])?> VND</p>
    <p class="card-text"><?php echo $value['mo_ta']?></p>


    <form action="?act=hoadon" method="post">
            <input type="hidden" name="idsp" value="<?php echo $value['id_sp'];?>">
            <input type="hidden" name="tensp" value="<?php echo $value['name_sp'];?>">
            <input type="hidden" name="img" value="<?php echo $value['image'];?>">
            <input type="hidden" name="gia" value="<?php echo $value['gia'];?>">
    <div class="row">
      <div class="col-6"><a href="?act=chitietsp&idsp=<?php echo $value['id_sp']?>" class="btn btn-primary">Xem</a></div>
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