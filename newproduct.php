<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Product with AdminLTE 3</title>

    <link rel="stylesheet" href="css/ListProduct.css?v=<?php echo time(); ?>">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="AdminLTE-3.1.0/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="AdminLTE-3.1.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="AdminLTE-3.1.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="AdminLTE-3.1.0/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="AdminLTE-3.1.0/dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Test Min!</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 jam yang lalu</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="AdminLTE-3.1.0/dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Apakah masih buka?</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 20 menit yang lalu
                                    </p>
                                </div>
                            </div>

                        </a>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Lihat Semua</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">2 Notifikasi</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 Pesan Baru
                            <span class="float-right text-muted text-sm">3 menit yang lalu</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 Laporan Baru
                            <span class="float-right text-muted text-sm">2 hari</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Notifikasi</a>
                    </div>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="dashboard.php" class="brand-link">
                <img src="AdminLTE-3.1.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Padang <b>"OKE"</b></span>
            </a>


            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="AdminLTE-3.1.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Muhamad Farrel R</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="newproduct.php" class="nav-link active">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    List Produk
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>


        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">List Product</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">List Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        $daftar_makanan = array(
                            array(
                                "nama" => "Ayam Pop",
                                "gambar" => "img/Makanan/pop.png",
                                "deskripsi" => "Ayam yang dimasak dengan bumbu rempah khas Padang hingga kering dan renyah di bagian luarnya.",
                                "harga" => "8.000"
                            ),
                            array(
                                "nama" => "Dendeng Balado",
                                "gambar" => "img/Makanan/download 1.png",
                                "deskripsi" => "Potongan daging sapi tipis yang digoreng kering dan disajikan dengan sambal balado.",
                                "harga" => "10.000"
                            ),
                            array(
                                "nama" => "Sambal Balado",
                                "gambar" => "img/Makanan/download 2.png",
                                "deskripsi" => "Sambal yang terbuat dari cabai merah dan bawang merah yang diulek dan dimasak dengan minyak.",
                                "harga" => "5.000"
                            ),
                            array(
                                "nama" => "Gulai Ayam",
                                "gambar" => "img/Makanan/download 3.png",
                                "deskripsi" => "Masakan ayam yang dimasak dengan bumbu rempah khas Padang dan santan.",
                                "harga" => "12.000"
                            ),
                            array(
                                "nama" => "Sate Padang",
                                "gambar" => "img/Makanan/download 4.png",
                                "deskripsi" => "Terbuat dari daging sapi yang dipotong kecil-kecil dan disajikan dengan kuah khas Padang.",
                                "harga" => "15.000"
                            ),
                            array(
                                "nama" => "Rendang",
                                "gambar" => "img/Makanan/download 5.png",
                                "deskripsi" => "Masakan daging sapi yang dimasak dengan rempah-rempah dan santan yang kental.",
                                "harga" => "16.000"
                            ),
                            array(
                                "nama" => "Bebek Goreng",
                                "gambar" => "img/Makanan/download 6.png",
                                "deskripsi" => "Bebek yang digoreng kering dengan bumbu rempah hingga renyah di bagian luarnya.",
                                "harga" => "20.000"
                            ),
                            array(
                                "nama" => "Ikan Asam Padeh",
                                "gambar" => "img/Makanan/download 7.png",
                                "deskripsi" => "Ikan yang dimasak dengan bumbu asam yang segar dan rempah-rempah khas Padang.",
                                "harga" => "17.000"
                            ),
                            array(
                                "nama" => "Pepes Ikan",
                                "gambar" => "img/Makanan/download 8.png",
                                "deskripsi" => "Potongan ikan yang dibumbui dengan rempah-rempah khas Padang, dibungkus dengan daun pisang, lalu dikukus.",
                                "harga" => "16.000"
                            ),
                            array(
                                "nama" => "Dendeng Batokok",
                                "gambar" => "img/Makanan/download 9.png",
                                "deskripsi" => "Dendeng batokok adalah irisan tipis daging sapi yang diasinkan kemudian digoreng kering.",
                                "harga" => "15.000"
                            ),
                            array(
                                "nama" => "Rendang Daging Paru",
                                "gambar" => "img/Makanan/download 10.png",
                                "deskripsi" => "Rendang daging paru adalah varian rendang yang menggunakan paru sapi sebagai bahan utamanya.",
                                "harga" => "14.000"
                            ),
                            array(
                                "nama" => "Rendang Lidah Sapi",
                                "gambar" => "img/Makanan/download 1.png",
                                "deskripsi" => "Rendang lidah sapi adalah hidangan rendang yang menggunakan lidah sapi sebagai bahan utamanya.",
                                "harga" => "15.000"
                            )
                        );

                        foreach ($daftar_makanan as $makanan) {
                        ?>
                        <div class="col-lg-2 col-md-4 col-sm-6" id="card">
                            <div class="card product-card">
                                <img src="<?php echo $makanan['gambar']; ?>" class="card-img-top product-image"
                                    alt="Product Image">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-title mb-2 text-sm font-weight-bold"><?php echo $makanan['nama']; ?></p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="card-price text-sm text-right text-muted"><?php echo $makanan['harga']; ?></p>
                                        </div>
                                    </div>
                                    <p class="card-text text-sm"><?php echo $makanan['deskripsi']; ?></p>
                                    <button type="button" class="btn btn-primary" id="btn-detail"
                                        data-toggle="modal" data-target="#myModal">Detail</button>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Product Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-4">
                            <div class="text-center">
                                <img id="modal-image" class="img-fluid" alt="Product Image">
                            </div>
                            <h5 class="modal-title mt-3" id="modal-title"></h5>
                            <p class="modal-price text-muted" id="modal-price"></p>
                            <p id="modal-description"></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>

    <script src="AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
    <script src="AdminLTE-3.1.0/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="js/modalproduct.js?v=<?php echo time(); ?>"></script>
    <script src="AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="AdminLTE-3.1.0/plugins/chart.js/Chart.min.js"></script>
    <script src="AdminLTE-3.1.0/plugins/sparklines/sparkline.js"></script>
    <script src="AdminLTE-3.1.0/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="AdminLTE-3.1.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="AdminLTE-3.1.0/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="AdminLTE-3.1.0/plugins/moment/moment.min.js"></script>
    <script src="AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="AdminLTE-3.1.0/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="AdminLTE-3.1.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="AdminLTE-3.1.0/dist/js/adminlte.js"></script>
    <script src="AdminLTE-3.1.0/dist/js/demo.js"></script>
    <script src="AdminLTE-3.1.0/dist/js/pages/dashboard.js"></script>
</body>

</html>
