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
    <title>登录|mishop商城后台管理系统</title>
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="c-app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <form id="signupForm" action="/action/login" method="post">
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                      </svg></span></div>
                  <input class="form-control" type="text" placeholder="Username" name="username">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                      </svg></span></div>
                  <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-link px-0" type="submit">Forgot password?</button>
                  </div>
                </div>
                </from>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a class="btn btn-lg btn-outline-light mt-3" type="button" href="/register">Register Now!</a>
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
    <script src="vendors/jquery-validation/js/jquery.validate.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function(event) {
        setTimeout(function() {
          document.body.classList.remove('c-no-layout-transition')
        }, 2000);
      });
    </script>
    <script>
      $.validator.setDefaults({
        submitHandler: function submitHandler(form,data) {
          // const postData = {
          //   username: form.username.value,
          //   password: form.password.value
          // }
          // $.ajax({
          //   method:'post',
          //   data: postData,
          //   url: '/action/login',
          //   success: function(res){
          //     console.log(res)
          //   }
          // })
          return true
        }
      });
      $('#signupForm').validate({
        rules: {
          username: {
            required: true,
            minlength: 2
          },
          password: {
            required: true,
            minlength: 5
          },
          
        },
        messages: {
          username: {
            required: 'Please enter a username',
            minlength: 'Your username must consist of at least 2 characters'
          },
          password: {
            required: 'Please provide a password',
            minlength: 'Your password must be at least 5 characters long'
          },
          
        },
        errorElement: 'em',
        errorPlacement: function errorPlacement(error, element) {
          error.addClass('invalid-feedback');

          if (element.prop('type') === 'checkbox') {
            error.insertAfter(element.parent('label'));
          } else {
            error.insertAfter(element);
          }
        },
        // eslint-disable-next-line object-shorthand
        highlight: function highlight(element) {
          $(element).addClass('is-invalid').removeClass('is-valid');
        },
        // eslint-disable-next-line object-shorthand
        unhighlight: function unhighlight(element) {
          $(element).addClass('is-valid').removeClass('is-invalid');
        }
      });
    </script>

  </body>
</html>