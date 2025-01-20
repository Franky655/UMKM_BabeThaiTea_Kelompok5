<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <!-- aos -->
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>UMKM BABE THAI TEA</title>
</head>

<body>
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

    <!-- SLIDER -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            @foreach ($sliders as $index => $slider)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset('image/' . $slider->image) }}" class="d-block w-100 carousel-img"
                        alt="..." />
                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- END SLIDER -->

    <!-- ABOUT US -->
    <div class="about-us mt-5">
        <div class="container">
            <div class="title-container text-center ">
                <h2 class="fw-bold">ABOUT US</h2>
            </div>
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
    </div>
    <!-- END ABOUT US -->

    <!-- MENU -->
    <div class="menu mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="fw-bold">MENU</h2>
            </div>
            <p class="text-center mt-4">
                Berbagai macam varian rasa minuman thai tea ini.
            </p>
            <div class="row mt-5">
                @foreach ($menu as $menu)
                    <div class="col-md-3">
                        <div class="card border-1 text-center p-1 mt-1" style="border: 1px solid #ddd;"
                            data-aos="zoom-in">
                            <div class="card-body">
                                <div class="card-icon">
                                    <img src="image/{{ $menu->image }}" alt="Gambar {{ $menu->nama_menu }}"
                                        class="img-fluid" width="150">
                                </div>
                                <div class="card-title fw-bolder mt-4">Rasa: {{ $menu->nama_menu }}</div>
                                <p class="card-description mt-3">
                                    Rp.{{ $menu->harga }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- END MENU-->

    <!-- PROMO -->
    <div class="promo mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">PROMO</h2>
            </div>
            <p class="text-center mt-4">
                Dan punya promo menarik lainnya.
            </p>
            <div class="row mt-4">
                @foreach ($promo as $promo)
                    <div class="col-md-6 pt-5 text-center" data-aos="zoom-in">
                        <img src="image/{{ $promo->image }}" class="img-fluid brand-image" alt="" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- END PROMO -->

    <!-- FOOTER -->
    <footer class="mt-5">
        <div class="footer-top bg-dark text-white p-5">
            <div class="container-fluid">
                <div class="row align-items-center">
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
