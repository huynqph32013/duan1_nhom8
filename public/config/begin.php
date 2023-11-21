<section class="py-0">

        <div class="container">
          <div class="row h-100 gx-2 mt-7">
            <?php foreach($spgg as $value):?>
              <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
              <div class="card card-span h-100">
                <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="../uploads/<?php echo $value['image']?>" alt="..." />
                  <div class="card-actions">
                    <div class="badge badge-foodwagon bg-primary p-4">
                      <div class="d-flex flex-between-center">
                        <div class="text-white fs-7"><?php echo $value['giam_gia']?></div>
                        <div class="d-block text-white fs-2">% <br />
                          <div class="fw-normal fs-1 mt-2">Off</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0">
                  <h5 class="fw-bold text-1000 text-truncate">Giảm Giá Siêu Mạnh</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 Giảm Giá</span></span>
                </div><a class="stretched-link" href="?act=chitietsp&idsp=<?php echo $value['id_sp']?>"></a>
              </div>
            </div>
            <?php endforeach;?>
           
        </div><!-- end of .container-->
        </div>

      </section>