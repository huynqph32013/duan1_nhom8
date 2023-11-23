<div style="border: 1px solid #FFB30E;margin-top:50px;text-align:center;border-radius:20px;" class="mainshopingcart">
<h3>Giỏ Hàng</h3>
<?php 
                   if(isset($_SESSION['myhd'])){
                    $i = 0;
                    $ttien = 0;
                    $sl = 0;
                    foreach($_SESSION['myhd'] as $cart){
                       
                    $hinh = '../uploads/'.$cart[2];
              
                    ?>
                    <div style="text-align: center;margin-top:50px;" class="row">
                        <div class="col-3"><img width="50px" src="<?php echo $hinh?>" alt="hehe"></div>
                        <div class="col-5"><p style="line-height: 50px;"><?php echo $cart[1]?></p></div>
                        <div class="col-4"><p style="line-height: 50px;"><?php echo number_format($cart[3])?> VND</p></div>
                    </div>
                    <div style="margin-top:10px" class="row">
                        <div class="col-4"> Số Lượng </div>
                        <div class="col-5">
                            <button class="btnupd" onclick="giam(this)"> - </button><span id="sluongg"><?php echo $cart[4]?></span><button class="btnupd" onclick="tang(this)"> + </button>
                        </div>
                        <div class="col-3"><a href="?act=delhd&idhd=<?php echo $i?>">Xóa</a></div>
                    </div>
                  
                    <?php
                    $ttien += $cart[3]*$cart[4];
                    $sl +=  $cart[4];
                    $i++;
                   } 
                   ?>
                        <?php if(isset($_SESSION['myhd'])&&($_SESSION['myhd'])):?>
                            <div style="margin-top: 50px;" class="row">
                            <div class="col-7"></div>
                            <div class="col-5"><button type="button" class="btn btn-primary" data-mdb-ripple-init>Lưu</button></div>
                        </div>
                        <?php endif;?>
                    <hr>
                    <div class="row">
                        <div class="col-4"><p>Số Lượng :</p></div>
                        <div class="col-2"><p><?php echo $sl?></p></div>
                        <div class="col-6"><p>Tổng Tiền :</p> <?php echo number_format($ttien)?> VND</div>
                    </div>
                   <div class="row"><button type="submit" id="submitmuahang" name="subdathang" class="btn btn-primary"><a href="?act=bill">Mua Ngay</a></button></div>

                   <?php
                
                }
?>
</div>
<script>
   function tang(x){
    var cha = x.parentElement;
    var slcu = cha.children[1];
    var slm = parseInt(slcu.innerText) + 1;
    slcu.innerText = slm;
    updategia();
   

   }


   function updategia(){
        var sl = $("#sluongg").text();
        console.log(sl);
   }


   function giam(x){
    var cha = x.parentElement;
    var slcu = cha.children[1];
    if(parseInt(slcu.innerText)>1){
    var slm = parseInt(slcu.innerText) - 1;
    slcu.innerText = slm;}
    updategia();
   }
</script>