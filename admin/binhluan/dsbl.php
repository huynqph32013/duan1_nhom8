<div id="wrapper">
    <div class="container1400">
        <div class="rowcmt">
        <div class="idbl">
            <h3>ID Bình Luận</h3>
        </div>
        <div class="noidungbl">
            <h3>Nội Dung</h3>
        </div>
        <div class="iduser">
            <h3>ID Khách Hàng</h3>
        </div>
        <div class="idsanpham">
            <h3>ID Sản Phẩm</h3>
        </div>
        <div class="ngaybinhluan">
            <h3>Ngày Bình Luận</h3>
        </div>
    </div>


    <?php foreach($dsbl as $value):?>
        <div class="rowcmtn">
        <div class="idbln">
            <p><?php echo $value['id_bl']?></p>
        </div>
        <div class="noidungbln">
            <p><?php echo $value['noi_dung']?></p>
        </div>
        <div class="idusern">
            <p><?php echo $value['id_user']?></p>
        </div>
        <div class="idsanphamn">
            <p><?php echo $value['id_sp']?></p>
        </div>
        <div class="ngaybinhluann">
            <p><?php echo $value['ngay_cmt']?></p>
        </div>
        <div class="actiondsbl">
            <a href="?act=delbl&idbl=<?php echo $value['id_bl']?>">Xóa</a>
        </div>
    </div>
    <hr>
    <?php endforeach;?>

    </div>
</div>