<div id="danhsach">
        <h2>Danh Sách Danh Mục</h2>
        <div class="addnew">

        </div>
        <div class="tableds1">
                <a href="?act=adddm">Thêm danh mục mới</a>
        </div>
        <div class="tableds">


                <div class="iddmdsdm">
                        <h5>ID Danh Mục</h5>
                </div>
                <div class="tendmdsdm">
                        <h5>Tên Danh Mục</h5>
                </div>
                <div class="sttdsdm">

                </div>
        </div>
        <?php foreach ($dsdm as $dsdm) : ?>
                <div class="tabledss">


                        <div class="iddmdsdms">
                                <p><?php echo $dsdm['id_dm']; ?></p>
                        </div>
                        <div class="tendmdsdms">
                                <p><?php echo $dsdm['ten_dm']; ?></p>
                        </div>
                        <div class="sttdsdms">

                                <a href="?act=editdm&iddm=<?php echo $dsdm['id_dm']; ?>">Sửa</a>
                        </div>

                </div>

        <?php endforeach; ?>

</div>