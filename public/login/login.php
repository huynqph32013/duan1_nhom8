<div class="wrapperlogin">
  <div class="hihi">
 
  </div>

  <div class="mainlogin">
  <h1 style="text-align: center;color: #FFB30E">Đăng Nhập</h1>
  <form method="post" action="?act=login">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="usern"/>
    <label class="form-label" for="form2Example1">Email</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="pass"/>
    <label class="form-label" for="form2Example2">Mật Khẩu</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
        <label class="form-check-label" for="form2Example34"> Nhớ Tôi </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Quên Mật Khẩu?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="sublogin">Đăng Nhập</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Bạn có tài khoản? <a href="?act=dangky">Đăng Ký</a></p>
    <p>Hoặc đăng nhập bằng:</p>
    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
  </div>

</div>