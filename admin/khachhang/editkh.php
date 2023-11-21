<div id="wrapper">
    <div class="container1920">
        <h1 style="text-align: center;">Quản Lý Khách Hàng</h1>
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
            
                <div class="rowdskhh">
                <div class="idkhdskhh">
                    <p><?php echo $kh['id_kh']?></p>
                </div>
                <div class="usnamedskhh">
                    <p><?php echo $kh['username']?></p>
                </div>
                <div class="passdskhh">
                    <p><?php echo $kh['password']?></p>
                </div>
                <div class="emaildskhh">
                    <p><?php echo $kh['email']?></p>
                </div>
                <div class="sdtdskhh">
                    <p><?php echo $kh['sdt']?></p>
                </div>
                <div class="imgdskhh">
                <?php if($kh['image']!= "" && $kh['image']!=null):?>
                <img width='50px' src="<?php echo '../uploads/'.$kh['image']?>" alt="">
                <?php endif; ?>
                </div>
                <div class="dcdskhh">
                    <p><?php echo $kh['address']?></p>
                </div>
                <div class="fullnamedskhh">
                    <p><?php echo $kh['fullname']?></p>
                </div>
                <div class="roledskhh">
                    <p><?php 
                    $role = $kh['role'];
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

            </div>
           
    </div>
    <br>
    <hr>
    <div class="mainaddsp">
    <form action="?act=editkh" method="post" enctype="multipart/form-data">
<div class="suasp">
    <div class="contenteditsp">
    
    <input type="hidden" name="idkh" value="<?php echo $kh['id_kh'];?>" placeholder="   Tài Khoản">
    </div>
    <div class="contenteditsp">
    <p>Tài Khoản: </p>
    <input type="text" name="usname" value="<?php echo $kh['username'];?>" placeholder="   Tài Khoản">
    </div>
    <div class="contenteditsp">
    <p>Mật Khẩu:  </p>
    <input type="text" name="pass" value="<?php echo $kh['password'];?>" placeholder="   Mật Khẩu">
    </div>
    <div class="contenteditsp">
    <p>Email:  </p>
    <input type="text" name="email" value="<?php echo $kh['email'];?>" placeholder="   Email">
    </div>
    <div class="contenteditsp">
    <p>Số Điện Thoại:  </p>
    <input type="text" name="sdt" value="<?php echo $kh['sdt'];?>" placeholder="   Số Điện Thoại">
    </div>
    <div class="contenteditspne">
    <?php if($kh['image']!= "" && $kh['image']!=null):?>
                <img width='50px' src="<?php echo '../uploads/'.$kh['image']?>" alt="">
                <?php endif; ?>
        <p>Chọn Ảnh</p>
    <input type="file" name="img">
    </div>

    <div class="contenteditsp">
    <p>Địa Chỉ:  </p>
    <input type="text" name="dc" value="<?php echo $kh['address'];?>" placeholder="   Địa chỉ">
    </div>

    <div class="contenteditsp">
    <p>Họ Tên: </p>
    <input type="text" name="hoten" value="<?php echo $kh['fullname'];?>" placeholder="   Họ Tên">
    </div>
    <div class="contenteditsp">
        <p>Danh Mục: </p>
    <select name="role" id="role" class="form-control">           
        <option value="1"selected>Admin</option>
        <option value="2"selected>Mod</option>
        <option value="0"selected>User</option>
    </select>
    </div>
    <div class="contenteditsp1">
        <input type="submit" name="subeditkh" value="Xác Nhận">
    </div>
</div>
</form>
    </div>
</div>