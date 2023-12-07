<div style="margin-top: 100px;margin-bottom: 100px" class="container">
    <div class="row">
    <form class="row g-3 needs-validation" action="?act=updatetk" method="post" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="idtk" value="<?php echo $tkh['id_kh']?>">
  <div class="col-md-6">
    <div class="form-outline" data-mdb-input-init>
      <input type="text" class="form-control" name="fulname" id="validationCustom01" value="<?php echo $tkh['fullname']?>" required />
      <label for="validationCustom01" class="form-label">Họ và Tên</label>
      <div class="valid-feedback">Looks good!</div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-outline" data-mdb-input-init>
      <input type="text" class="form-control" name="email" id="validationCustom02" value="<?php echo $tkh['email']?>" required />
      <label for="validationCustom02" class="form-label">Email</label>
      <div class="valid-feedback">Looks good!</div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-outline" data-mdb-input-init>
      <input type="text" class="form-control" name="sdt" id="validationCustom03" value="<?php echo $tkh['sdt']?>" required />
      <label for="validationCustom03" class="form-label">Số điện thoại</label>
      <div class="invalid-feedback">Please provide a valid city.</div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-outline" data-mdb-input-init>
      <input type="text" class="form-control" name="diachi" id="validationCustom05" value="<?php echo $tkh['address']?>" required />
      <label for="validationCustom05" class="form-label">địa chỉ</label>
      <div class="invalid-feedback">Please provide a valid zip.</div>
    </div>
  </div>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8"><input type="file" class="form-control" name="img" id="customFile" /></div>
    <div class="col-2"></div>
</div>
  <div  class="col-12">
    <button class="btn btn-primary" type="submit" name="submitform" data-mdb-ripple-init>Cập Nhật</button>
  </div>
</form>
    </div>
</div>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
import { Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Input, Ripple });

(() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>