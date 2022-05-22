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
    <link rel="shortcut icon" href="{{ url('/')}}/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('/')}}/assets/images/logo/favicon.png" type="image/png">
    <style>
        .dark{
            background-color: #1E1E2D;
        }
        .whity{
            background: #ffffff;
            width: 80%;
        }
        .img-three{
            width: 150px !important;
        }

        .logo-sigap{
            width: 150px !important;
            margin-right: 50px;
        }
    </style>
</head>

<body class="dark">
    <div class="row p-5 whity mt-5 m-auto">
        <div class="col-6 d-flex align-items-center">
            <img src="{{asset('assets/images/logo/logo.png')}}" class="logo-sigap mr-4">
            <div class="ml-4">
                <img src="{{asset('assets/images/logo/logo2.png')}}" class="img-three">
                <p class="mt-2">Welcome to</p>
                <h1 style="font-family: Roboto; font-size:50px">SIGAP</h1>
                <p>Sistem informasi penindakan dan penangkapan</p>
            </div>
        </div>
        <div class="col-6 shadow p-4">
            <div class="text-end">
                <h2 class="fw-bold" style="font-family: 'Calibri' !important; font-size: 100px">Log in.</h2>
                <p>Log in with your data
                    that the admin has specified</p>
            </div>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control rounded-5" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mb-3">
                    <a href=""><i>Forgot Password ?</i></a>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:34:54 GMT -->

</html>