<div id="wrapper">
    <div class="container1920">
        <h1 style="text-align: center;">Quản Lý Khách Hàng</h1>
        <div class="rowdskhh">
            <h3><a href="?act=addkh">Thêm Khách Hàng Mới</a></h3>
        </div>



        <div style="margin-top: 50px;" class="container">
            <div class="row">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col">id</th>
                            <th>Họ Tên</th>
                            <th>Title</th>
                            <th>Địa Chỉ</th>
                            <th>Chức Vụ</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dskh as $value) : ?>
                            <tr>
                                <th scope="row"><?php echo $value['id_kh'] ?></th>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../uploads/<?php echo $value['image'] ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1"><?php echo $value['username'] ?></p>
                                            <p class="text-muted mb-0"><?php echo $value['email'] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">Tài Khoản: <?php echo $value['username'] ?></p>
                                    <p class="text-muted mb-0">Mật Khẩu: ******</p>
                                </td>
                                <td>
                                    <p><?php echo $value['address'] ?></p>
                                </td>
                                <td>
                                    <p><?php
                                        $role = $value['role'];
                                        switch ($role) {
                                            case '0': {
                                                    echo 'User';
                                                    break;
                                                }
                                            case '1': {
                                                    echo 'Admin';
                                                    break;
                                                }
                                            case '2': {
                                                    echo 'Mod';
                                                    break;
                                                }
                                            default: {
                                                    echo 'User';
                                                    break;
                                                }
                                        }
                                        ?></p>
                                </td>

                                <td>
                                    <a href="?act=delkh&idkh=<?php echo $value['id_kh'] ?>">Xóa</a>
                                    <a href="?act=editkh&idkh=<?php echo $value['id_kh'] ?>">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>





                    </tbody>
                </table>
            </div>
        </div>