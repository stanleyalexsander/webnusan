<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Qiraat/Lagu - SMK Nusantara 1 Ciputat</title>

    <!-- CSS Sendiri -->
    <link rel="stylesheet" href="ekskul-asset/style.css">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700&display=swap"
        rel="stylesheet">

    <!-- CSS Icon -->
    <link rel="stylesheet" href="vendor/fontawesome-free-5.15.4/css/all.min.css">

    <!-- CSS Fancyapps -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
</head>

<body>
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- END Navbar -->

    <!-- Hero -->
    <div class="container-fluid banner-wrap p-0">
        <div class="container banner-container mx-auto p-0">
            <div class="row m-0">
                <div class="col-12 p-0 my-auto text-center">
                    <h1 class="mb-3">Ekstrakurikuler</h1>
                    <h3 class="text-white">Qiraat/Lagu</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Content 2 -->
    <div class="container content-2-container">
        <div class="row content-2-row mx-auto justify-content-between">
            <div class="col-6 content-2-col-kiri p-0 my-auto">
                <h2>Tentang</h2>
                <p class="m-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque sagittis odio, ut
                    consequat felis posuere ut. Quisque venenatis vel mauris vel tristique. Nullam consequat lacus at
                    justo convallis aliquet. Vivamus velit tellus, finibus eu dictum nec, feugiat vitae libero. Duis
                    eget est dictum, condimentum enim at, vestibulum mi. Sed at massa placerat, cursus sapien sit amet,
                    eleifend purus. Quisque aliquam nec dui at bibendum. Nam ultrices lorem quis lacus blandit, at
                    tempor lorem luctus. Vestibulum lacinia erat purus, in interdum eros sollicitudin id. Suspendisse
                    eleifend suscipit placerat.
                </p>
            </div>
            <div class="col-6 content-2-col-kanan p-0 text-end">
                <img class="end-0 h-100 rounded" src="ekskul-asset/qiraat-lagu/img/Bimbingan ROHIS.JPG" alt="">
            </div>
        </div>
    </div>
    <!-- END Content 2 -->

    <!-- Content 4 -->
    <div class="container-fluid content-4-container">
        <div class="row content-4-row mx-auto justify-content-between">
            <div class="col content-4-col-kiri p-0">
                <img class="position-absolute start-0" src="jurusan-asset/rpl/img/piala.png" alt="Ilustrasi Piala">
            </div>
            <div class="col content-4-col-kanan p-0">
                <h2 class="text-white">Prestasi</h2>
                <img class="" src="ekskul-asset/qiraat-lagu/img/prestasi.svg" alt="prestasi">
            </div>
        </div>
    </div>
    <!-- END Content 4 -->

    <!-- Wrapper -->
    <div class="container content-wrap mx-auto p-0">

        <!-- Content 5 -->
        <div class="container content-5-container">
            <div class="row content-5-row mx-auto justify-content-between">
                <h2 class="p-0">Galeri</h2>
                <div class="col-4">
                    <a data-fancybox="gallery" href="ekskul-asset/qiraat-lagu/img/Bimbingan ROHIS.JPG" data-caption="">
                        <img class="rounded" src="ekskul-asset/qiraat-lagu/img/Bimbingan ROHIS.JPG" />
                    </a>
                </div>
            </div>
        </div>
        <!-- END Content 5 -->

    </div>
    <!-- END Wrapper -->

    <!-- Footer -->
    <footer class=" sticky-footer footer-container">
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

    <!-- Wrapper -->
    <div class="container content-wrap mx-auto">
    </div>
    <!-- END Wrapper -->

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JS Fancyapps -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>

</html>
