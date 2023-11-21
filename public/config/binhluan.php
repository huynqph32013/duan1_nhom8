<?php 
        if(isset($_SESSION['checkus'])&&($_SESSION['checkus'])){
            $idtkhoan = getone_khachhang($_SESSION['checkus']['id_kh']);
            $img = '../uploads/'.$idtkhoan['image'];
        } else {
            $img = './assets/img/imgprofile.jpg';
        }
        ?>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <form action="?act=binhluan" method="post">
            <input type="hidden" name="idspbl" value="<?php echo $sanpham['id_sp']?>">
        <div class="row">



    <div class="col-1">
            <img style="border-radius: 20%;" width="50px" height="50px" src="<?php echo $img?>" alt="Anh Loi">
    </div>


    <div class="col-9">
                <input style="height: 50px;" type="text" name="inputbinhluan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="col-2">
                <button style="height: 50px;" type="submit" name="btnbinhluan" class="btn btn-warning">Gửi</button>
    </div>

    
    </div>
    </form>

</div>


    <div class="col-1"></div>
</div>
