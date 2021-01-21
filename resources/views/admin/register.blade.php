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
                    </svg></span>
                </div>
                <input class="form-control" type="text" placeholder="Username" name="username">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                    </svg></span></div>
                <input class="form-control" type="text" placeholder="Email" name="email">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                    </svg></span></div>
                <input class="form-control" type="password" placeholder="Password" name="password">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                    </svg></span></div>
                <input class="form-control" type="password" placeholder="Repeat password" name="repwd">
              </div>
              <button class="btn btn-block btn-success" type="button" id="submit">Create Account</button>
              </form>
            </div>
            <div class="card-footer p-4">
              <div class="row">
                <div class="col-6">
                  
                </div>
                <div class="col-6">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="/vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <script src="/vendors/jquery/js/jquery.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function(event) {
        setTimeout(function() {
          document.body.classList.remove('c-no-layout-transition')
        }, 2000);
      });
    </script>
    <script>
      $(function(){
        function validate(validations){
          let pass = true;
          for(let i=0;i<validations.length;i++){
            const target = validations[i].target
            const val = target.val();
            if(!target || !target.length){
              continue
            }
            /**首先把状态清除 */
            target.removeClass('is-invalid')
            target.next('.invalid-feedback').remove();
            for(let j=0;j<validations[i].rules.length;j++){
              const rule = validations[i].rules[j];
              if(rule.required && !val){console.log(rule,validations[i])
                target.addClass('is-invalid');
                target.after('<div class="invalid-feedback">'+rule.message+'</div>');
                pass = false
              }
            }
          }
          return pass;
        }
        $('#submit').click(function(){
          const postData = {
            username: $('input[name="username"]').val(),
            email: $('input[name="email"]').val(),
            password: $('input[name="password"]').val()
          }
          const repassword = $('input[name="repwd"]').val();
          const validateRules = [
            {
              target: $('input[name="username"]'),
              rules:[
                {required: true,message:'请输入用户名'}
              ]
            },
            {
              target: $('input[name="name"]'),
              rules:[
                {required: true,message:'请输入名称'}
              ]
            },
            {
              target: $('input[name="email"]'),
              rules:[
                {required: true,message:'请输入邮箱'}
              ]
            },
            {
              target: $('input[name="password"]'),
              rules:[
                {required: true,message:'请输入密码'}
              ]
            },
            {
              target: $('input[name="repwd"]'),
              rules:[
                {required: true,message:'请重新输入密码'}
              ]
            }
          ]
          if(!validate(validateRules)){console.log('校验不通过')
            return false
          }

          $.ajax({
            method:'post',
            data: postData,
            url: '/register/action/save',
            success: function(res){
              console.log(res)
            }
          })

        })
      })
    </script>

  </body>
</html>