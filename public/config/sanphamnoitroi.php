<section class="py-4 overflow-hidden">

<div class="container">
  <div class="row h-100">
    <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
      <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Popular items</h5>
    </div>
    <div class="col-12">
      <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row gx-3 h-100 align-items-center">
            <?php foreach ($top10 as $value):?>
                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"  src="../uploads/<?php echo $value['image']?>" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="fw-bold text-1000 text-truncate mb-1"><?php echo $value['name_sp']?></h5>
                    <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Hà Nội</span></div><span class="text-1000 fw-bold"><?php echo number_format($value['gia'])?></span>
                  </div>
                </div>
                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="?act=chitietsp&idsp=<?php echo $value['id_sp']?>" role="button">Mua Ngay</a></div>
              </div>
                <?php endforeach;?>
            </div>
          </div>


          <div class="carousel-item" data-bs-interval="5000">
            <div class="row gx-3 h-100 align-items-center">
            <?php foreach ($top5 as $value):?>
                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100"  src="../uploads/<?php echo $value['image']?>" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="fw-bold text-1000 text-truncate mb-1"><?php echo $value['name_sp']?></h5>
                    <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Hà Nội</span></div><span class="text-1000 fw-bold"><?php echo number_format($value['gia'])?></span>
                  </div>
                </div>
                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="?act=chitietsp&idsp=<?php echo $value['id_sp']?>" role="button">Mua Ngay</a></div>
              </div>
                <?php endforeach;?>
            </div>
          </div>

          
          
           
          </div>
        </div>
        <button class="carousel-control-prev carousel-icon" type="button" data-bs-target="#carouselPopularItems" data-bs-slide="prev"><span class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
        <button class="carousel-control-next carousel-icon" type="button" data-bs-target="#carouselPopularItems" data-bs-slide="next"><span class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
      </div>
    </div>
  </div>
</div><!-- end of .container-->
</section>