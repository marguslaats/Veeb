<?php require_once APPROOT.'/views/inc/header.php';?>
  <!-- Login Form -->
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2> Log In</h2>
        <form action="<?php echo URLROOT;?>users/login" method="post">
              <label for="email">E-mail: </label>
              <input type="text" id="email" class="form-control">
              <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" id="password" class="form-control">
                <br>
                <div class="row">
                  <div class="col">
                    <input type="submit" value="Login" class="btn btn-block btn-info">
                  </div>
                </div>
        </form>
      </div>
    </div>
  </div>
<?php require_once APPROOT.'/views/inc/footer.php';?>