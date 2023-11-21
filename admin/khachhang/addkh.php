<div id="wrapper">
    <div class="mainaddsp">
    <form action="?act=addkh" method="post" enctype="multipart/form-data">
<div class="suasp">


    <div class="contenteditsp">
    <p>Tài Khoản: </p>
    <input type="text" name="usname" placeholder="   Tài Khoản">
    </div>
    <div class="contenteditsp">
    <p>Mật Khẩu:  </p>
    <input type="text" name="pass" placeholder="   Mật Khẩu">
    </div>
    <div class="contenteditsp">
    <p>Email:  </p>
    <input type="text" name="email" placeholder="   Email">
    </div>
    <div class="contenteditsp">
    <p>Số Điện Thoại:  </p>
    <input type="text" name="sdt" placeholder="   Số Điện Thoại">
    </div>
    <div class="contenteditspne">
        <p>Chọn Ảnh</p>
    <input type="file" name="img">
    </div>

    <div class="contenteditsp">
    <p>Địa Chỉ:  </p>
    <input type="text" name="dc" placeholder="   Địa chỉ">
    </div>

    <div class="contenteditsp">
    <p>Họ Tên: </p>
    <input type="text" name="hoten" placeholder="   Họ Tên">
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
        <input type="submit" name="subaddkh" value="Xác Nhận">
    </div>
</div>
</form>
    </div>
</div>