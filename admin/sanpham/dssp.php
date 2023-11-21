<div id="wrappersp">
    <h2>Danh Sách Sản Phẩm</h2>
    
    <div class="mainspp">
    <h4><a href="?act=addsp">Thêm Sản Phẩm</a></h4>
    </div><br>
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
        <div class="action">
        <h3>Action</h3>
        </div>

</div>

<?php foreach($dssp as $value):?>
    <div class="mainspp">
        <div class="idspdsspp">
        <p><?php echo $value['id_sp']?></p>
        </div>
        <div class="tenspdsspp">
        <p><?php echo $value['name_sp']?></p>
        </div>
        <div class="giadsspp">
        <p><?php echo number_format($value['gia'])." VND"?></p>
        </div>
        <div class="giamgiadsspp">
        <p><?php echo $value['giam_gia']?></p>
        </div>
        <div class="anhspdsspp">
        <?php if($value['image']!= "" && $value['image']!=null):?>
                <img width='70px' src="<?php echo '../uploads/'.$value['image']?>" alt="">
                <?php endif; ?>
        </div>
        <div class="datedsspp">
        <p><?php echo $value['date']?></p>
        </div>

        <div class="dacbietdsdmp">
        <p><?php echo $value['dacbiet']?></p>
        </div>
        <div class="viewdsspp">
        <p><?php echo $value['luot_xem']?></p>
        </div>
        <div class="motadsspp">
        <p><?php echo $value['mo_ta']?></p>
        </div>
        <div class="sizedsspp">
        <p><?php echo $value['size']?></p>
        </div>
        <div class="actionp">
        <a href="?act=delsp&idsp=<?php echo $value['id_sp']?>">Xóa</a>
        <a href="?act=editsp&idsp=<?php echo $value['id_sp']?>">Sửa</a>
        </div>
</div>
<?php endforeach;?>
</div>