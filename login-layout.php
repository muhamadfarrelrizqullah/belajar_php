<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in with AdminLTE</title>
    <link rel="stylesheet" href="css/LoginLayout.css?v=<?php echo time(); ?>">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="AdminLTE-3.1.0/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login Gagal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Email atau password yang Anda masukkan salah. Silakan coba lagi.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="login-box">
        <div class="card card-outline card-secondary" id="card">
            <div class="card-header text-center">
                <a href="index.php" class="h1"><b>Padang</b> "Oke"</a>
            </div>

            <div class="card-body">
                <img src="img/LoginPage.png" alt="Selamat Datang" class="img-fluid mx-auto d-block mb-3 w-50">
                <p class="login-box-msg">Selamat datang di Rumah Rasa Nasi Padang! Masuk untuk merasakan nikmatnya cita
                    rasa khas Padang.</p>

                <form action="login.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember" class="remember">
                                    Ingat Saya
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" value="login" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>


                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-secondary" id="bt">
                        <i class="fab fa-google mr-2"></i> Sign in menggunakan Google
                    </a>
                    <a href="#" class="btn btn-block btn-primary" id="bt">
                        Daftar Akun
                    </a>
                </div>

                <p class="mb-1" id="forgot">
                    <a href="#">Lupa Password</a>
                </p>
            </div>
        </div>
    </div>

    <script src="AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
    <script src="AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="AdminLTE-3.1.0/dist/js/adminlte.min.js"></script>

    <script src="js/modal-login.js?v=<?php echo time(); ?>"> </script>
</body>

</html>
