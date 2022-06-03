<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zuramai.github.io/mazer/demo/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:34:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Laporan P2</title>
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
                        <form>

                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text" class="form-control form-control-xl" placeholder="Name">
                                <div class="form-control-icon">
                                    <i class="bi bi-person-check"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="email" class="form-control form-control-xl" placeholder="Email">
                                <div class="form-control-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            </div>
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
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" class="form-control form-control-xl"
                                    placeholder="Confirm Password">
                                <div class="form-control-icon">
                                    <i class="bi bi-key-fill"></i>
                                </div>
                            </div>
                            <div class="modal-primary">
                                <div class="row">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add-user">
                                        Sign Up
                                    </button>
                                </div>
                                <div class="modal fade text-left" id="add-user" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel110" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title white" id="myModalLabel110">
                                                    Konfirmasi
                                                </h5>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin akan menambahkan pengguna tersebut?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Cancel</span>
                                                </button>
                                                <a href="/admin/login">
                                                    <button type="button" class="btn btn-primary ml-1"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Accept</span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ url('/')}}/assets/js/app.js"></script>

<!-- Mirrored from zuramai.github.io/mazer/demo/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:34:54 GMT -->

</html>