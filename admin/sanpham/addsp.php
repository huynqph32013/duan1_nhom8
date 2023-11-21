<div id="wrapper">
    <div class="mainaddsp">
    <form action="?act=addsp" method="post" enctype="multipart/form-data">
<div class="suasp">

    <div class="contenteditsp">
    <p>Tên Sản Phẩm:  </p>
    <input type="text"  name="tensp" placeholder="   Tên Sản Phẩm">
    </div>
    <div class="contenteditsp">
    <p>Giá: </p>
    <input type="text" name="gia" placeholder="   Giá Sản Phẩm">
    </div>
    <div class="contenteditsp">
    <p>Giảm Giá:  </p>
    <input type="text" name="giamgia" placeholder="   Giảm giá">
    </div>
    <div class="contenteditspne">
        <p>Chọn Ảnh</p>
    <input type="file" name="img">
    </div>
    <div class="contenteditsp">
        <p>Danh Mục: </p>
    <select name="danhmucsp" id="danhmuc" class="form-control">
                <?php foreach($dsdm as $value): ?>
                <option value="<?php echo $value['id_dm']?>"  selected>
                    <?php echo $value['ten_dm']?>
                </option>
                <?php endforeach; ?>
            </select>
    </div>
    <div class="contenteditsp">
    <p>Đặc Biệt:  </p>
    <input type="text" name="dacbiet" placeholder="   Đặc Biệt">
    </div>

    <div class="contenteditsp">
    <p>Mô Tả: </p>
    <input type="text" name="mota" placeholder="   Mô Tả">
    </div>
    <div class="contenteditsp">
    <p>Size:  </p>
    <input type="text" name="size" placeholder="   Size">
    </div>
    <div class="contenteditsp1">
        <input type="submit" name="subaddsp" value="Xác Nhận">
    </div>
</div>
</form>
    </div>
</div>