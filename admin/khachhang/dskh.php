<div id="wrapper">
    <div class="container1920">
        <h1 style="text-align: center;">Quản Lý Khách Hàng</h1>
        <div class="rowdskhh">
            <h3><a href="?act=addkh">Thêm Khách Hàng Mới</a></h3>
        </div>
            <div class="rowdskh">
                <div class="idkhdskh">
                    <h3>ID</h3>
                </div>
                <div class="usnamedskh">
                    <h3>UserName</h3>
                </div>
                <div class="passdskh">
                    <h3>Mật Khẩu</h3>
                </div>
                <div class="emaildskh">
                    <h3>Email</h3>
                </div>
                <div class="sdtdskh">
                    <h3>SDT</h3>
                </div>
                <div class="imgdskh">
                    <h3>Ảnh</h3>
                </div>
                <div class="dcdskh">
                    <h3>Địa Chỉ</h3>
                </div>
                <div class="fullnamedskh">
                    <h3>Họ Tên</h3>
                </div>
                <div class="roledskh">
                    <h3>Role</h3>
                </div>
                <div class="actdskh">

                </div>
            </div>
            <?php foreach($dskh as $value):?>
                <div class="rowdskhh">
                <div class="idkhdskhh">
                    <p><?php echo $value['id_kh']?></p>
                </div>
                <div class="usnamedskhh">
                    <p><?php echo $value['username']?></p>
                </div>
                <div class="passdskhh">
                    <p><?php echo $value['password']?></p>
                </div>
                <div class="emaildskhh">
                    <p><?php echo $value['email']?></p>
                </div>
                <div class="sdtdskhh">
                    <p><?php echo $value['sdt']?></p>
                </div>
                <div class="imgdskhh">
                <?php if($value['image']!= "" && $value['image']!=null):?>
                <img width='50px' src="<?php echo '../uploads/'.$value['image']?>" alt="">
                <?php endif; ?>
                </div>
                <div class="dcdskhh">
                    <p><?php echo $value['address']?></p>
                </div>
                <div class="fullnamedskhh">
                    <p><?php echo $value['fullname']?></p>
                </div>
                <div class="roledskhh">
                    <p><?php 
                    $role = $value['role'];
                    switch($role) {
                        case '0':{
                            echo 'User';
                            break;
                        }
                        case '1':{
                            echo 'Admin';
                            break;
                        }
                        case '2':{
                            echo 'Mod';
                            break;
                        }
                        default:{
                            echo 'User';
                            break;
                        }
                    }
                    ?></p>
                </div>
                <div class="actdskhh">
                    <a href="?act=delkh&idkh=<?php echo $value['id_kh']?>">Xóa</a>
                    <a href="?act=editkh&idkh=<?php echo $value['id_kh']?>">Edit</a>
                </div>
            </div>
            <?php endforeach;?>
    </div>
</div>