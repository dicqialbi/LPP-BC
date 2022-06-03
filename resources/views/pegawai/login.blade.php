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
    <link rel="shortcut icon" href="{{asset('assets/images/logo/logosc.png')}}" type="image/png">
    <style>
        /* * * * * General CSS * * * * */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: 400;
            background: white;
        }

        .wrapper {
            margin: 0 auto;
            width: 100%;
            max-width: 1140px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container {
            position: relative;
            width: 100%;
            max-width: 1000px;
            height: 100%;
            display: flex;
        }

        /* * * * * Login Form CSS * * * * */
        h2 {
            margin: 0;
            font-size: 30px;
            font-weight: 700;
        }

        p {
            margin: 0 0 20px 0;
            font-size: 16px;
            font-weight: 500;
            line-height: 22px;
        }

        .btn {
            display: inline-block;
            padding: 7px 20px;
            font-size: 16px;
            letter-spacing: 1px;
            text-decoration: none;
            border-radius: 5px;
            color: #ffffff;
            outline: none;
            border: 1px solid #ffffff;
            transition: .3s;
            -webkit-transition: .3s;
        }

        .btn:hover {
            color: #3950A2;
            background: #ffffff;
        }

        .col-left,
        .col-right {
            /* width: 55%; */
            padding: 50px;
            display: flex;
        }

        .col-right {
            width: 45%;
            background-color: #1E1E2D;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        .col-left {
            width: 55%;
            background: #151521;
            align-items: center;
        }

        .col-left-main {
            display: flex !important;
        }

        @media(max-width: 770px) {
            .container {
                flex-direction: column;
            }

            .col-left,
            .col-right {
                width: 100%;
                margin: 0;
                padding: 15%;
                -webkit-clip-path: none;
                clip-path: none;
            }
        }

        .login-text {
            position: relative;
            width: 100%;
            color: #ffffff;
        }

        .login-form {
            position: relative;
            width: 100%;
            color: #666666;
        }

        .login-form p:last-child {
            margin: 0;
        }

        .login-form p a {
            color: #3950A2;
            font-size: 14px;
            text-decoration: none;
        }

        .login-form p:last-child a:last-child {
            float: right;
        }

        .login-form label {
            display: block;
            width: 100%;
            margin-bottom: 2px;
            letter-spacing: .5px;
        }

        .login-form p:last-child label {
            width: 60%;
            float: left;
        }

        .login-form label span {
            color: #ff574e;
            padding-left: 2px;
        }

        .login-form input {
            display: block;
            width: 100%;
            height: 40px;
            padding: 0 10px;
            font-size: 16px;
            letter-spacing: 1px;
            outline: none;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        .login-form input:focus {
            border-color: #ff574e;
        }

        .login-form input.btn {
            color: #ffffff;
            background: #3950A2;
            border-color: #3950A2;
            outline: none;
            cursor: pointer;
        }

        .login-form input.btn:hover {
            color: #3950A2;
            background: #ffffff;
        }

        .login-text-right {
            font-family: 'Calibri';
            font-color: white;
            font-size: 100px;
            text-align: right
        }

        .sigap {
            font-family: Roboto;
            font-size: 50px;
            font-weight: bolder;
            margin: 0
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="col-left">
                <div class="col-left-main">
                    <div style="margin: 5%">
                        <img src="{{asset('assets/images/logo/logo.png')}}">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/logo/logo2.png')}}">
                        <h4 class="mt-3" style="font-family: calibri">Welcome to</h4>
                        <h1 class="sigap">SIGAP</h1>
                        <p>(Sistem informasi penindakan dan penangkapan)</p>
                    </div>
                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2 class="login-text-right">Log in.</h2>
                    <p style="text-align: right">Log in with your data
                        that the admin has specified</p>
                    <form>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-key-fill"></i>
                            </div>
                        </div>
                        <p>
                            <a href="/pegawai/forgot">Forgot password?</a>
                        </p>
                        <a href="/pegawai/dashboard">
                            <input class="btn" type="button" value="Log in" />
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:34:54 GMT -->

</html>