<div id="wrapper">
    <div class="klsgj"></div>
<div style="margin-top: 100px;margin-bottom:100px;" class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            
            <div class="row">
                <div class="col-5">
                    <img style="border-radius: 20px;" width="300px" height="400px" src="../uploads/<?php echo $tk['image']?>" alt="img profile">
                </div>
                <div class="col-7">
                    
                <h2 style="text-align:center">Thông Tin Tài Khoản</h2>
                <div class="row">
                    <div class="col-12">
                    Họ Tên: <h3 style="margin-top:20px"><?php echo $tk['fullname']."       "?><span class="badge bg-secondary"><?php echo checkrole($tk['role'])?></span></h3>
                    </div>
                    <div style="margin-top: 50px;" class="row">
                            <div class="col-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-arrow-down-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697Zm.192 8.159 6.57-4.027L8 9.586l1.239-.757.367.225A4.49 4.49 0 0 0 8 12.5c0 .526.09 1.03.256 1.5H2a2 2 0 0 1-1.808-1.144ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-1.646a.5.5 0 0 1-.722-.016l-1.149-1.25a.5.5 0 1 1 .737-.676l.28.305V11a.5.5 0 0 1 1 0v1.793l.396-.397a.5.5 0 0 1 .708.708l-1.25 1.25Z"/>
                            </svg>    
                            <strong>Email</strong> : <?php echo $tk['email']?> 
                            </div>
                            <div class="col-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
                            </svg>
                            <strong>Phone </strong>: <?php echo $tk['sdt']?> 
                            </div>

                    </div>
                    <div style="margin-top: 50px;" class="row">
                        <div class="col-12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg> <strong>Địa Chỉ</strong> : <?php echo $tk['address']?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</div>