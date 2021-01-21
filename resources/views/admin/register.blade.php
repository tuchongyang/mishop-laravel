<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>注册|mishop商城后台管理系统</title>
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="c-app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mx-4">
            <div class="card-body p-4">
              <h1>Register</h1>
              <p class="text-muted">Create your account</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                    </svg></span></div>
                <input class="form-control" type="text" placeholder="Username">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                    </svg></span></div>
                <input class="form-control" type="text" placeholder="Email">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                    </svg></span></div>
                <input class="form-control" type="password" placeholder="Password">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                    </svg></span></div>
                <input class="form-control" type="password" placeholder="Repeat password">
              </div>
              <button class="btn btn-block btn-success" type="button">Create Account</button>
            </div>
            <div class="card-footer p-4">
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-block btn-facebook" type="button"><span>facebook</span></button>
                </div>
                <div class="col-6">
                  <button class="btn btn-block btn-twitter" type="button"><span>twitter</span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <script>
      document.addEventListener("DOMContentLoaded", function(event) {
        setTimeout(function() {
          document.body.classList.remove('c-no-layout-transition')
        }, 2000);
      });
    </script>

  </body>
</html>