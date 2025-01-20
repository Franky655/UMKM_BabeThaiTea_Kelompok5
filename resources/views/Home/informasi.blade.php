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

    <!-- NAVBAR -->
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
    <!-- END NAVBAR -->

    <!-- HEADER  -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Informasi</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Informasi</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END HEADER -->

    <!-- INFORMASI -->
    <div class="informasi bg-light py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">INFORMASI</h2>
            </div>
            <p class="text-center">Berikut informasi tambahan mengenai UMKM Babe Thai Tea ini.</p>
            <div class="row">
                @foreach ($informasi as $informasi)
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('image/' . $informasi->image) }}" class="card-img-top" alt="..."
                                style="max-width: 100%; height: auto;">
                            <div class="card-body text-center">
                                <h5 class="card-title text-bold">{{ $informasi->title }}</h5>
                                <p class="card-text text-muted">{{ $informasi->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- END INFORMASI -->

    <!-- FOOTER -->
    <footer class="mt-5">
        <div class="footer-top bg-dark text-white p-5">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h4 class="fw-bold">{{ $contact->name }}</h4>
                        <br>
                        <strong>Phone</strong>: <span>{{ $contact->telepon }}</span>
                        <br />
                        <strong>Email</strong>: <span>{{ $contact->email }}</span>
                    </div>
                    <div class="col-md-2">
                        <h4 class="fw-bold">Useful Links I</h4>
                        <ul class="list-group list-unstyled">
                            <li class="list-item">
                                <a href="index" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Home
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="about" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    About Us
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="informasi" class="text-decoration-none text-white">
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
                                <a href="menu" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Menu
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="promo" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Promo
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="contact" class="text-decoration-none text-white">
                                    <i class="fa fa-chevron-right primary"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-end">
                        <img src="{{ asset('/lte/dist/img/Foto UMKM.jpg') }}" alt="Logo Babe Thai Tea"
                            class="img-fluid" style="max-width: 200px; border-radius: 10px;">
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
                            <a href="https://wa.me/085365555676" class="mx-2" target="_blank">
                                <i class="fab fa-whatsapp fa-2x"></i>
                            </a>
                            <a href="https://www.instagram.com/babethaitea_pku/" class="mx-2">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- TO TOP-->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- END TO TOP -->

    <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
    </body>

</html>
