<style>
  label {
    width: 100px;
  }

  div {
    margin-top: 10px;
    margin-bottom: 10px;
  }
</style>

<div>
  <div class="container d-flex justify-content-center align-items-center" style="height: 700px;">
    <div class="card justify-content-center align-items-center shadow" style="min-height: 50%; min-width: 50%; ">
      <img src="https://edi-indonesia.co.id/wp-content/uploads/2018/12/product-default-logo-detail.jpg" alt="logo edii">
      <h4>Welcome</h4>
      <form method="post" action="home" class="form-group">
        <div class="form-control">
          <label for="email">email</label>
          <input type="text" name="email" id="email">
        </div>
        <div class="form-control">
          <label for="password">password</label>
          <input type="password" name="password" id="password">
        </div>
        <div class="d-flex justify-content-around">
          <button type="submit" class="btn btn-primary">login</button>
          <button class="btn btn-outline-primary">
            <a href="register">
              sign up
            </a>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>