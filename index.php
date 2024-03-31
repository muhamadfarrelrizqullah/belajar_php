<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semantic HTML - Padang Oke</title>

    <link rel="stylesheet" href="Landing.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary" id="navbar">
            <a class="navbar-brand text-light display-4" href="index.php"><b>Padang</b> "Oke"</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login-layout.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#card">Top Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#kontak-form">Kontak</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>


    <main role="main">

        <section class="jumbotron">
            <div class="container">
                <h2 class="jumbotron-heading">Selamat Datang di <b>Padang</b> "Oke"</h2>
                <p class="lead text-muted">Nikmati cita rasa khas masakan Padang yang lezat.</p>
                <p>
                    <a href="#card" class="btn btn-light text-light my-2" id="bt-menu">Top Menu</a>
                    <a href="#kontak-form" class="btn btn-light text-light my-2" id="bt-kontak">Hubungi Kami</a>
                </p>
            </div>
        </section>

        <div class="album py-5" id="card">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="img/Makanan/pop.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ayam Pop</h5>
                                <p class="card-text">Ayam yang dimasak dengan bumbu rempah khas Padang hingga kering dan
                                    renyah di bagian luarnya.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Pesan</button>
                                    </div>
                                    <small class="text-muted">8.000</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="img/Makanan/download 1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dendeng Balado</h5>
                                <p class="card-text">Potongan daging sapi tipis dan lembut yang digoreng kering dan
                                    disajikan
                                    dengan sambal balado.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Pesan</button>
                                    </div>
                                    <small class="text-muted">10.000</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="img/Makanan/download 4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sate Padang</h5>
                                <p class="card-text">Terbuat dari daging sapi yang dipotong kecil-kecil dan disajikan
                                    dengan kuah khas Padang.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Pesan</button>
                                    </div>
                                    <small class="text-muted">15.000</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section id="kontak-form">
            <div class="container">
                <h2 class="text-center">Hubungi Kami</h2>
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3" placeholder="Masukkan pesan Anda"></textarea>
                    </div>
                    <button type="submit" class="btn btn-light text-light" id="bt-kirim">Kirim</button>
                </form>
            </div>
        </section>

    </main>

    <footer class="text-white text-center" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="footer-top"><u>Alamat Kami</u></h5>
                    <p>Jalan Ahmad Yani No. 123</p>
                    <p>Surabaya</p>
                    <p>12345, Jawa Timur</p>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-top"><u>Hubungi Kami</u></h5>
                    <p>Email: padangoke@mail.com</p>
                    <p>Telepon: 123-456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-top"><u>Ikuti Kami</u></h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"
                                    id="icon"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"
                                    id="icon"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"
                                    id="icon"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3">
            <p>&copy; 2024 Padang Oke. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
