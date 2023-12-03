<div class="container">
<div style="margin-top: 100px;" class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h3>Thống Kê Danh Mục</h3>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Danh Mục</th>
      <th scope="col">Số Sản Phẩm</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($tk as $value): ?>
        
    <tr>
      <th scope="row"><?php echo $value['id_dm']?></th>
      <td><?php echo $value['ten_dm']?></td>
      <td><?php echo $value['sl']?></td>
      <td>...</td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <h3>10 Sản Phẩm View Cao</h3>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table style="margin-top: 50px;" class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Giảm Giá</th>
      <th scope="col">Giá</th>
      <th scope="col">Chỉ còn</th>
      <th scope="col">Lượt Xem</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($top10sp_view as $value): ?>
        
    <tr>
      <th scope="row"><?php echo $value['id_sp']?></th>
      <td><?php echo $value['name_sp']?></td>
      <td><img width="50px" height="50px" src="../uploads/<?php echo $value['image']?>" alt="hehe"></td>
      <td><?php echo $value['giam_gia']?> %</td>
      <td><?php echo number_format($value['gia'])?> VND</td>
      <td><?php echo number_format($value['gia'] - ($value['gia']*$value['giam_gia']/100))?> VND</td>
      <td><?php echo $value['luot_xem']?></td>

    </tr>
    <?php endforeach;?>
  </tbody>
</table>    
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>




    


</div>