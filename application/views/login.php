<div class="content-wrapper">
    <section class="content">
    <div class="col-md-6 col-md-offset-3">
   <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <?= (isset($msg))?"<div class='alert alert-info'>".$msg."</div>":null ?>
    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
   </div>
    </section>
</div>