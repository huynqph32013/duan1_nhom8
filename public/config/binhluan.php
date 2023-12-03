<?php 
        if(isset($_SESSION['checkus'])&&($_SESSION['checkus'])){
            $idtkhoan = getone_khachhang($_SESSION['checkus']['id_kh']);
            $img = '../uploads/'.$idtkhoan['image'];
        } else {
            $img = './assets/img/imgprofile.jpg';
        }
        ?>



<form action="?act=binhluan" method="post">
<input type="hidden" name="idspbl" value="<?php echo $sanpham['id_sp']?>">
<div style="margin-top: 200px;" class="container">
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
    
    
<div class="card">
               
              <div class="row">
                  
                  <div class="col-2">
                      
                      
                      <img src="<?php echo $img?>" width="70" class="rounded-circle mt-2">
                  
                  
                  </div>
                  
                  <div class="col-10">
                      
                      <div class="comment-box ml-2">
                          
                          <h4>Bình Luận</h4>
                          

                          
                          <div class="comment-area">
                              
                              <textarea class="form-control" name="inputbinhluan" placeholder="Bạn thấy sao về sản phẩm này?" rows="4"></textarea>
                          
                          </div>
                          
                          <div class="comment-btns mt-2">
                              
                              <div class="row">
                                  
                                  <div class="col-6">
                                      
                                      <div class="pull-left">
                                      
                                         
                                          
                                      </div>
                                  
                                  </div>
                                  
                                  <div class="col-6">
                                      
                                      <div style="text-align: right;" class="pull-right">
                                      
                                      <button name="btnbinhluan" class="btn btn-success send btn-sm">Gửi <i class="fa fa-long-arrow-right ml-1"></i></button>      
                                          
                                      </div>
                                  
                                  </div>
                              
                              </div>
                          
                          </div>
                      
                      
                      </div>
                  
                  </div>
              
              
              </div>
    
          </div>



          </div>
          <div class="col-1"></div>
          </div>
          </div>
          

          </div>
          </form>


