<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Kontak - SMK Nusantara 1 Ciputat</title>

    <!-- CSS Sendiri -->
    <link rel="stylesheet" href="kontak-asset/style.css">

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


    <!-- Content -->
    <div class="container-fluid content-wrap p-0">
        <div class="container content-container mt-0">
            <div class="row justify-content-between">
                <div class="col-6 col-kiri p-0 my-auto">
                    <form method="post" action="kontak">
                        @csrf
                        <h2 class="mb-2">Kotak Pesan</h2>
                        <p class="mb-3">Tinggalkan pertanyaan dan masukan seputar SMK Nusantara 1 Ciputat</p>
                        <div class="mb-3">
                            <label for="input-nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="input-nama" name="nama"
                                 required>
                        </div>
                        <div class="mb-3">
                            <label for="input-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="input-email" name="email"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="input-subjek" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="input-subjek" name="subjek"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="input-pertanyaan" class="form-label">Pertanyaan</label>
                            <textarea class="form-control" id="input-pertanyaan " name="pertanyaan"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn rounded-pill"><i class="fas fa-check"></i> Submit</button>
                    </form>
                </div>
                <div class="col-6 col-kanan p-0 text-end my-auto">
                    <img src="kontak-asset/img/hubungi-kami-banner.svg">
                </div>
            </div>
        </div>
    </div>

    <div class="content-container p-0">
        <div class="row row-alamat">
            <h2 class="text-center">Lokasi</h2>

            <p class="text-center mb-3">Jl. Tarumanegara Dalam No. 1, Kelurahan Pisangan, Kecamatan Ciputat, Kota
                Tangerang
                Selatan 15419, Provinsi
                Banten
            </p>

            <div class="card p-3 rounded">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.616336022285!2d106.75317401531971!3d-6.314025563547447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efc4ffba1817%3A0x6522db55f8047520!2sSMK%20Nusantara%201%20Ciputat!5e0!3m2!1sen!2sid!4v1644918488021!5m2!1sen!2sid"
                    class="rounded w-100" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>
        <hr class="mb-3 p-0">
        <div class="row mb-5">
            <div class="col p-0 text-center">
                <p><i class="fas fa-phone-alt"></i> (021) 747 7222</p>
            </div>
            <div class="col p-0 text-center">
                <a href="https://api.whatsapp.com/send?phone=6289636917477&text=hai%20bg."><i
                        class="fab fa-whatsapp"></i> Whatsapp</a>
            </div>
            <div class="col p-0 text-center">
                <a href="https://www.instagram.com/smknusantara1ciputat/"><i class="fab fa-instagram-square"></i>
                    @smknusantara1ciputat</a>
            </div>
            <div class="col p-0 text-center">
                <a href="#"><i class="fab fa-facebook-square"></i> nusantaracrew</a>
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
    @include('sweetalert::alert')
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
