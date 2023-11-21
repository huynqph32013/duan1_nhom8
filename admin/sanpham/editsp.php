<div id="wrappersp">
    <h2>Sửa Sản Phẩm</h2>
    <div class="mainsp">
        <div class="idspdssp">
        <h3>ID Sp</h3>
        </div>
        <div class="tenspdssp">
        <h3>Tên Sản Phẩm</h3>
        </div>
        <div class="giadssp">
        <h3>Giá</h3>
        </div>
        <div class="giamgiadssp">
        <h3>Giảm Giá</h3>
        </div>
        <div class="anhspdssp">
        <h3>Image</h3>
        </div>
        <div class="datedssp">
        <h3>Ngày Đăng</h3>
        </div>

        <div class="dacbietdsdm">
        <h3>Đặc Biệt</h3>
        </div>
        <div class="viewdssp">
        <h3>View</h3>
        </div>
        <div class="motadssp">
        <h3>Mô Tả</h3>
        </div>
        <div class="sizedssp">
        <h3>Size</h3>
        </div>


</div>

<div class="mainspp">
        <div class="idspdsspp">
        <p><?php echo $sp['id_sp']?></p>
        </div>
        <div class="tenspdsspp">
        <p><?php echo $sp['name_sp']?></p>
        </div>
        <div class="giadsspp">
        <p><?php echo number_format($sp['gia'])." VND"?></p>
        </div>
        <div class="giamgiadsspp">
        <p><?php echo $sp['giam_gia']?></p>
        </div>
        <div class="anhspdsspp">
        <p><?php echo $sp['image']?></p>
        </div>
        <div class="datedsspp">
        <p><?php echo $sp['date']?></p>
        </div>

        <div class="dacbietdsdmp">
        <p><?php echo $sp['dacbiet']?></p>
        </div>
        <div class="viewdsspp">
        <p><?php echo $sp['luot_xem']?></p>
        </div>
        <div class="motadsspp">
        <p><?php echo $sp['mo_ta']?></p>
        </div>
        <div class="sizedsspp">
        <p><?php echo $sp['size']?></p>
        </div>
     
</div>
<br>
<br>
<hr>
<form action="?act=editsp" method="post" enctype="multipart/form-data">
<div class="suasp">
    <div class="contenteditsp">
        
        <input type="hidden" value="<?php echo $sp['id_sp']?>" name="idsp">
    </div>
    <div class="contenteditsp">
    <p>Tên Sản Phẩm:  <?php echo $sp['name_sp']?></p>
    <input type="text" value="<?php echo $sp['name_sp']?>" name="tensp" placeholder="   Tên Sản Phẩm">
    </div>
    <div class="contenteditsp">
    <p>Giá:  <?php echo number_format($sp['gia'])?> VND</p>
    <input type="text" value="<?php echo $sp['gia']?> "name="gia" placeholder="   Giá Sản Phẩm">
    </div>
    <div class="contenteditsp">
    <p>Giảm Giá:  <?php echo $sp['giam_gia']?> %</p>
    <input type="text" value="<?php echo $sp['giam_gia']?> "name="giamgia" placeholder="   Giảm giá">
    </div>
    <div class="contenteditspne">
    <?php if($sp['image'] != null && $sp['image'] != ""): ?>
            <img width="70" src="<?php echo "../uploads/" . $sp['image']; ?>" alt="">
    <?php endif; ?>
    <input type="file" value="<?php echo $sp['image']?> "name="img">
    </div>
    <div class="contenteditsp">
        <p>Danh Mục: 
    <select name="danhmucsp" id="danhmuc" class="form-control">
                <?php foreach($dsdm as $value): ?>
                <option value="<?php echo $value['id_dm']?>" <?php if($sp['id_dm'] == $value['id_dm']): ?> selected
                    <?php endif; ?>>
                    <?php echo $value['ten_dm']?>
                </option>
                <?php endforeach; ?>
            </select>
    </div>
    <div class="contenteditsp">
    <p>Đặc Biệt:  <?php echo $sp['dacbiet']?></p>
    <input type="text" value="<?php echo $sp['dacbiet']?> "name="dacbiet" placeholder="   Đặc Biệt">
    </div>

    <div class="contenteditsp">
    <p>Mô Tả: <?php echo $sp['mo_ta']?></p>
    <input type="text" value="<?php echo $sp['mo_ta']?> "name="mota" placeholder="   Mô Tả">
    </div>
    <div class="contenteditsp">
    <p>Size:  <?php echo $sp['size']?></p>
    <input type="text" value="<?php echo $sp['size']?> "name="size" placeholder="   Size">
    </div>
    <div class="contenteditsp1">
        <input type="submit" name="subeditsp" value="Xác Nhận">
    </div>
</div>
</form>
</div>