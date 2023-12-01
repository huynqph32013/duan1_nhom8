<div class="wrapperlogin">
    <div class="hihi"> </div>
    <div class="mainlogin">

  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
  <h1 style="text-align: center;color: #FFB30E">Đăng Ký</h1>
  <form action="?act=dangky" method="post">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example1" name="hoten" class="form-control" />
        <label class="form-label" for="form3Example1">Họ Tên</label>
      </div>
    </div>

  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form3Example3" name="user" class="form-control" />
    <label class="form-label" for="form3Example3">Tài Khoản</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="pass" id="form3Example4" class="form-control" />
    <label class="form-label" for="form3Example4">Mật Khẩu</label>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
    <label class="form-check-label" for="form2Example33">
      Theo dõi bản tin mới nhất
    </label>
  </div>

  <!-- Submit button -->
  <button type="submit" name="submitdangky" class="btn btn-primary btn-block mb-4">Đăng Ký</button>
  </form>
  <!-- Register buttons -->
  <div class="text-center">
    <p>hoặc đăng ký bằng:</p>
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

    </div>
</div>