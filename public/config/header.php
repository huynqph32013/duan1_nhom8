<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="?act=home"><img class="d-inline-block" src="assets/img/gallery/logo.svg" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">Yuhn Food</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
            <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
              <p class="mb-0 fw-bold text-lg-center">Giao Tới: <i class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">Địa Chỉ  </span><span> Hà Nội, Nam Từ Liêm</span></p>
            </div>
            
            <?php 
              if(isset($_SESSION['checkus']['id_kh'])){
                ?>
<a href="?act=donhang"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
</svg></a>
                <?php
              }
            ?>
            
            <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
              <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
                <input class="form-control border-0 input-box bg-100" type="search" name="namesp" placeholder="Tim Kiếm" aria-label="Search" />
                
              </div>
                <?php
                if(isset($_SESSION['checkus'])){
                  extract($_SESSION['checkus']);
                  if($role == 1){
                    ?>
                    <a href="../admin/index.php">admin |</a>
                    <a href="?act=chitiettk&idkh=<?php echo $id_kh?>"><?php echo "$username "."  |"?></a>
                    <a href="?act=logout">LogOut</a>
                    <?php
                  } else {
                    ?>
                    <a href="?act=chitiettk&idkh=<?php echo $id_kh?>"><?php echo $username?></a>
                    <a href="?act=logout">LogOut</a>
                    <?php
                  }
             
                } else{
?>
<button class="btn btn-white shadow-warning text-warning" type="submit"><i class="fas fa-user me-2"></i><a href="?act=login">Đăng Nhập</a></button>

<?php
}
                ?>
            </form>
            
          
          </div>
        
        

        </div>
      </nav>