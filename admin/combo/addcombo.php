<div style="margin-top: 100px;" class="container">
<h2 style="text-align:center;margin-bottom:50px">Thêm Combo Mới</h2>
<form action="?act=addcombo" method="post" enctype="multipart/form-data">
    <div class="row">

<div class="col-4">
    <div class="form-outline">
      <input type="text" name="tencombo" class="form-control" id="validationDefault03" required />
      <label for="validationDefault03" class="form-label">Tên ComBo</label>
    </div>
  </div>

  <div class="col-4">
    <div class="form-outline">
      <input type="text" name="giamgiacb" class="form-control" id="validationDefault05" required />
      <label for="validationDefault05" class="form-label">Giảm Giá</label>
    </div>
  </div>

    <div class="col-4">
    <input class="form-control" name="img" type="file" id="formFileMultiple" multiple />
    <label for="validationDefault05" class="form-label">Ảnh Combo</label>
    </div>


    </div>
    <div class="row">
    <div class="form-outline">
  <input type="text" name="mota" id="form12" class="form-control" />
  <label class="form-label" for="form12">Mô Tả Combo</label>
</div>
    </div>


    <hr>
    <div class="row">
      <h3 style="text-align: center;">Chọn Sản Phẩm cho combo của bạn</h3>
  <?php foreach($dssp as $value):?>
    <div class="col-1"></div>

      <div style="margin-top: 20px;" class="col-5">
        <div class="row">
          <div class="col-3"><input type="checkbox" name="sanphamNe[]" value="<?php echo $value['id_sp']?>">   
          <img width="50px" height="50px" src="../uploads/<?php echo $value['image']?>" alt=""></div>
          <div class="col-6"><p style="line-height:50px"><?php echo $value['name_sp']?></p></div> 

          <div class="col-3"><p style="line-height:50px"><?php echo number_format($value['gia'])?> VND</p></div>
          <hr>
        </div>
      </div>
  <?php endforeach;?>


<div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6"> 
       
        </div>
        <div class="col-3"> <button type="submit" name="btnsubmit" class="btn btn-primary">Thêm</button></div>

    </div>
    </form>
</div>