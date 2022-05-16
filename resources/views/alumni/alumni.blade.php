<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Alumni - SMK Nusantara 1 Ciputat</title>

    <!-- CSS Sendiri -->
    <link rel="stylesheet" href="alumni-asset/style.css">

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
            <div class="row justify-content-between m-0">
                <div class="col-6 col-kiri-hero p-0 my-auto">
                    <h1>Cerita Alumni</h1>
                </div>
                <div class="col-6 col-kanan-hero p-0 text-end my-auto">
                    <img src="alumni-asset/img/alumni-banner.svg">
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Content -->
    <div class="container content-container p-0">
        <div class="row content-row p-0 m-0 justify-content-between">
            <div class="col-12 content-col p-0 mx-0">
                <div class="card">
                    <div class="row">
                        <div class="col col-kiri my-auto">
                            <h3>Santoso Ardiansyah</h3>
                            <p>
                                Alumni Jurusan Multimedia, namun kompetensi lainpun dia kembangkan, sehingga berhasil
                                meraih juara pada
                                ajang festival kopi sedunia di Prancis.
                            </p>
                        </div>
                        <div class="col col-kanan">
                            <img class="rounded-circle" src="alumni-asset/img/santoso-ardiansyah.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 content-col p-0 mx-0">
                <div class="card">
                    <div class="row">
                        <div class="col col-kiri my-auto">
                            <h3>Jaka Mulya</h3>
                            <p>
                                Saya salah satu alumni dari jurusan Akuntansi, selepas SMK melanjutkan kuliah di jurusan
                                yang sama.
                                Alhamdulillah ilmu yang di dapat di jurusan membantu dan memudahkan saya mendapatkan
                                pekerjaan yang saya
                                impikan, saya bekerja di KAP BDO Tanubrata & Adviser sebagai Senior Auditor.
                            </p>
                        </div>
                        <div class="col col-kanan my-auto">
                            <img class="rounded-circle" src="alumni-asset/img/jaka-mulya.jpg" alt="">
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
