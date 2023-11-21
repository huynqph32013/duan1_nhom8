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
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6"> 
       
        </div>
        <div class="col-3"> <button type="submit" name="btnsubmit" class="btn btn-primary">Thêm</button></div>

    </div>
    </form>
</div>