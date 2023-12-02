







<div class="container">
    <a href="?act=editsp"><< back</a>
<form action="?act=addsp" method="post" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $sp['id_sp']?>" name="idsp">
    <div style="margin-top: 50px;" class="row">
        <div class="col-4"><input class="form-control" type="text"  aria-label="readonly input example" name="tensp" value="<?php echo $sp['name_sp']?>" placeholder="   Tên Sản Phẩm" readonly ></div>
        <div class="col-4"><input class="form-control" type="text"  aria-label="readonly input example" name="gia" value="<?php echo $sp['gia']?>" placeholder="   Giá Sản Phẩm" readonly></div>
        <div class="col-4"><input class="form-control" type="text"  aria-label="readonly input example" name="giamgia" value="<?php echo $sp['giam_gia']?>" placeholder="   Giảm giá" readonly></div>
    </div>
    <div style="margin-top: 50px;" class="row">
        <div class="col-6">
            <div class="row">
            <div class="col-2"><img width="70" src="<?php echo "../uploads/" . $sp['image']; ?>" alt=""></div>
                <div class="col-10"><input class="form-control" type="file" name="img" id="formFile"></div>
                
            </div>
            </div>
        <div class="col-6">
        <select class="form-select" name="danhmucsp" id="danhmuc" aria-label="Default select example">
        <?php foreach($dsdm as $value): ?>
                <option value="<?php echo $value['id_dm']?>" <?php if($sp['id_dm'] == $value['id_dm']): ?> selected
                    <?php endif; ?>>
                    <?php echo $value['ten_dm']?>
                </option>
                <?php endforeach; ?>
        </select>
        </div>
    </div>

    <div style="margin-top: 50px;" class="row">
    <div class="mb-3">

  <textarea class="form-control" id="exampleFormControlTextarea1"  name="mota" value="<?php echo $sp['mo_ta']?> placeholder="   Mô Tả" rows="3"></textarea>
</div>
    </div>
    <div class="row">
        <div style="text-align: center;" class="col-12">
        <button type="submit" name="subeditsp" class="btn btn-warning">Xác Nhận</button>
        </div>
    </div>
    </form>
</div>