<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zuramai.github.io/mazer/demo/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:34:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="{{ url('/')}}/assets/css/main/app.css">
    <link rel="stylesheet" href="{{ url('/')}}/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="{{ url('/')}}/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('/')}}/assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="mt-5">
            <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo" class="m-auto" style="width:100%">
          </div>

          <div class="card card-primary">
            <div class="card-header text-center"><h4>Login</h4></div>

            <div class="card-body">
              <form method="POST" action="#" class="needs-validation" novalidate="">
                <div class="form-group">
                  <label for="email">Username</label>
                  <input id="email" type="email" class="form-control" name="email" tabindex="1" required="" autofocus="">
                  <div class="invalid-feedback">
                    Please fill in your Username
                  </div>
                </div>

                <div class="form-group">
                  <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    <div class="float-right">
                      <a href="auth-forgot-password.html" class="text-small">
                        Forgot Password?
                      </a>
                    </div>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2" required="">
                  <div class="invalid-feedback">
                    please fill in your password
                  </div>
                </div>

                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:34:54 GMT -->

</html>
