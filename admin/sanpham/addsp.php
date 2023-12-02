


<div class="container">
    <a href="?act=dssp"><< back</a>
<form action="?act=addsp" method="post" enctype="multipart/form-data">
    <div style="margin-top: 50px;" class="row">
        <div class="col-4"><input class="form-control" type="text"  aria-label="readonly input example" name="tensp" placeholder="   Tên Sản Phẩm" readonly ></div>
        <div class="col-4"><input class="form-control" type="text"  aria-label="readonly input example" name="gia" placeholder="   Giá Sản Phẩm" readonly></div>
        <div class="col-4"><input class="form-control" type="text"  aria-label="readonly input example" name="giamgia" placeholder="   Giảm giá" readonly></div>
    </div>
    <div style="margin-top: 50px;" class="row">
        <div class="col-6"><input class="form-control" type="file" name="img" id="formFile"></div>
        <div class="col-6">
        <select class="form-select" name="danhmucsp" id="danhmuc" aria-label="Default select example">
        <?php foreach($dsdm as $value): ?>
                <option value="<?php echo $value['id_dm']?>"  selected>
                    <?php echo $value['ten_dm']?>
                </option>
                <?php endforeach; ?>
        </select>
        </div>
    </div>

    <div style="margin-top: 50px;" class="row">
    <div class="mb-3">

  <textarea class="form-control" id="exampleFormControlTextarea1"  name="mota" placeholder="   Mô Tả" rows="3"></textarea>
</div>
    </div>
    <div class="row">
        <div style="text-align: center;" class="col-12">
        <button type="submit" name="subaddsp" class="btn btn-warning">Thêm Mới</button>
        </div>
    </div>
    </form>
</div>