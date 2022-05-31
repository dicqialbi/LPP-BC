<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zuramai.github.io/mazer/demo/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:34:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laporan P2</title>
    <link rel="stylesheet" href="{{ url('/')}}/assets/css/main/app.css">
    <link rel="stylesheet" href="{{ url('/')}}/assets/css/pages/auth.css">
    {{-- <link rel="shortcut icon" href="{{ url('/')}}/assets/images/logo/favicon.svg" type="image/x-icon"> --}}
    <link rel="shortcut icon" href="{{asset('assets/images/logo/logosc.png')}}" type="image/png">
</head>

<body class="py-5">
    <div class="row d-flex align-items-center m-auto" style="background-color: #151521; width: 80%">
        <div class="col-6 d-flex align-items-center">
            <div class="m-5">
                <img src="{{asset('assets/images/logo/logo.png')}}" class="mr-4">
            </div>
            <div class="ml-4">
                <img src="{{asset('assets/images/logo/logo2.png')}}">
                <h4 class="mt-3" style="font-family: calibri">Welcome to</h4>
                <h1 style="font-family: Roboto; font-size:50px; font-weight:bolder">SIGAP</h1>
                <p>(Sistem informasi penindakan dan penangkapan)</p>
            </div>
        </div>
        <div class="col-6 shadow p-5" style="background-color: #1E1E2D">
            <div class="text-end">
                <h2 style="font-family: 'Calibri'; font-size: 70pt">Forgot password.</h2>
                <p>Input your email and we will send
                    you reset password link.</p>
            </div>
            <form>
                <div class="m-5">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-xl" placeholder="Email Address">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="mx-5">
                    <a href="/pegawai/login">
                        <button type="button" class="btn btn-primary btn-block">Send</button>
                    </a>
                </div>

            </form>
        </div>
    </div>
</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:34:54 GMT -->

</html>