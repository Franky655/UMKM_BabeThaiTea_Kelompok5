<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <!-- aos -->
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>UMKM BABE THAI TEA</title>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top fy-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><span class="primary">BABE</span>THAI TEA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="about">About Us</a></li>
                            <li><a class="dropdown-item" href="informasi">Informasi</a></li>
                            <li>
                                <a class="dropdown-item" href="testimoni">Testimoni</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="promo">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- breadcumbs  -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>About</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>About</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- about -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6" data-aos="fade-right">
                <h3 class="fw-bold about-us-title">
                    {{ $about->judul }}
                </h3>
                <p class="fw-bolder mt-4 about-us-subtitle">
                    {{ $about->subjudul }}
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <p>
                    {{ $about->deskripsi_1 }}
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fa fa-check-double primary"></i>
                        {{ $about->kelebihan_1 }}
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-check-double primary"></i>
                        {{ $about->kelebihan_2 }}
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-check-double primary"></i>
                        {{ $about->kelebihan_3 }}
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-check-double primary"></i>
                        {{ $about->kelebihan_4 }}
                    </li>
                </ul>
                <p class="mt-2">
                    {{ $about->deskripsi_2 }}
                </p>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- footer -->
    <footer class="mt-5">
        <div class="footer-top bg-dark text-white p-5">
            <div class="container-fluid">
                <div class="row align-items-center"> <!-- Tambah align-items-center -->
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h4 class="fw-bold">{{ $contact->name }}</h4>
                        <p>
                            {{ $contact->description }}
                        </p>
                        <strong>Phone</strong>: <span>{{ $contact->telepon }}</span>
                        <br />
                        <strong>Email</strong>: <span>{{ $contact->email }}</span>
                    </div>
                    <div class="col-md-2">
                        <h4 class="fw-bold">Useful Links I</h4>
                        <ul class="list-group list-unstyled">
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Home
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    About Us
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Informasi
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h4 class="fw-bold">Useful Links II</h4>
                        <ul class="list-group list-unstyled">
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Menu
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Promo
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-end"> <!-- Kurangi lebar kolom -->
                        <img src="{{ asset('/lte/dist/img/Foto UMKM.jpg') }}" alt="Logo Babe Thai Tea"
                            class="img-fluid" style="max-width: 200px; border-radius: 10px;">
                        <!-- Sesuaikan ukuran -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-down bg-darker text-white px-5 py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="copyright">
                            &copy; Copyright <strong>BABE THAI TEA</strong>. All Right Reserved
                        </div>
                        <div class="credits">
                            By Kelompok 5
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="social-links float-end">
                            <a href="" class="mx-2">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer  -->

    <!-- to top -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
    </body>

</html>
