<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Berita - SMK Nusantara 1 Ciputat</title>

    <!-- CSS Sendiri -->
    <link rel="stylesheet" href="berita-asset/style.css">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700&display=swap"
        rel="stylesheet">

    <!-- CSS Icon -->
    <link rel="stylesheet" href="vendor/fontawesome-free-5.15.4/css/all.min.css">

    <!-- CSS AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- END Navbar -->

    <!-- Hero  -->
    <div class="container-fluid banner-wrap p-0">
        <div class="container banner-container mx-auto p-0">
            <div class="row m-0">
                <div class="col-12 p-0 my-auto text-center">
                    <h1>Berita Terbaru</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Content -->
    <div class="container content-container p-0">
        <div class="row content-row p-0 m-0 justify-content-between">

            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="galeri-asset/img/17 agustusan siswa.JPG" class="img-fluid rounded"
                            alt="Lomba Acara 17 Agustus">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body h-100 py-0">
                            <p class="card-text"><small class="text-muted"><i class="fas fa-calendar pe-2"></i>
                                    20
                                    Agustus 2019</small></p>
                            <hr>
                            <h3 class="card-title">Acara Lomba 17 Agustus</h3>
                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque
                                suscipit volutpat est, nec vehicula massa tincidunt ac. Morbi luctus diam non odio
                                varius, nec volutpat risus volutpat. Nunc egestas sapien sed consectetur malesuada.
                                Sed pellentesque dolor et blandit bibendum. Aliquam sollicitudin massa et bibendum
                                commodo.</p>
                            <a class="mb-0" href="acara-lomba-17-agustus">
                                Baca selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="galeri-asset/img/17 agustusan siswa.JPG" class="img-fluid rounded"
                            alt="Lomba Acara 17 Agustus">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body h-100 py-0">
                            <p class="card-text"><small class="text-muted"><i class="fas fa-calendar pe-2"></i>
                                    20
                                    Agustus 2019</small></p>
                            <hr>
                            <h3 class="card-title">Acara Lomba 17 Agustus</h3>
                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque
                                suscipit volutpat est, nec vehicula massa tincidunt ac. Morbi luctus diam non odio
                                varius, nec volutpat risus volutpat. Nunc egestas sapien sed consectetur malesuada.
                                Sed pellentesque dolor et blandit bibendum. Aliquam sollicitudin massa et bibendum
                                commodo.</p>
                            <a class="mb-0" href="acara-lomba-17-agustus">
                                Baca selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- END Content -->

    <!-- Footer -->
    <footer class="sticky-footer footer-container">
        <div class="container container-footer-wrap">
            <div class="row justify-content-between">
                <div class="col-4">
                    <p>Menu Utama</p>
                    <ul class="list-unstyled">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Profil Jurusan</a></li>
                        <li><a href="#">PPDB</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <p>Alamat</p>
                    <ul class="list-unstyled">
                        <li>
                            <a>Jl. Tarumanegara Dalam No.1
                                <br>Kel. Pisangan, Kec. Ciputat Timur,
                                <br>Kota Tangerang Selatan, Banten
                            </a>
                        </li>
                        <br>
                        <li><a>No. Telepon: (021) 74707222</a></li>
                        <li><a>Email: smknusantara1tangsel@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <p>Statistik Website</p>
                    <ul class="list-unstyled">
                        <li><a>Pengunjung hari ini: 100</a></li>
                        <li><a>Pengunjung bulan ini: 353</a></li>
                        <li><a>Total pengunjung: 1920</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JS AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JS Eksekusi -->
    <script type="text/javascript">
        // Scroll Navbar
        $(document).ready(function() {
            // AOS
            AOS.init({
                once: true
            });
        });
    </script>
</body>

</html>
