<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Streaming - SMK Nusantara 1 Ciputat</title>

    <!-- CSS Sendiri -->
    <link rel="stylesheet" href="streaming-asset/style.css">

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
    <div class="navbar-scroll-trigger"></div>
    <div class="navbar-container-wrap container-fluid sticky-top p-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container navbar-container navbar-light">
                <a class="navbar-brand position-relative" href="/"><img id="navbar-logo"
                        src="{{ asset('portal-asset/img/logo-hitam.png') }}"></a>
                <button class="navbar-toggler btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-primary"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end position-relative" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="dropbtn nav-link nav-link-scroll-trigger">Beranda</a>
                                <div class="dropdown-content">
                                    <div class="dropdown-home">
                                        <a class="dropbtn nav-link ">Home <i class="fas fa-caret-right"></i></a>
                                        <div class="dropdown-content-home">
                                            <a href="/#visi-misi">Visi Misi</a>
                                            <a href="/#sambutan">Sambutan</a>
                                            <a href="/#latar-belakang">Latar Belakang</a>
                                            <a href="/#fasilitas-sekolah">Fasilitas Sekolah</a>
                                            <a href="/#video-profil">Video Profil</a>
                                            <a href="/#jumlah-siswa">Jumlah Siswa</a>
                                            <a href="/#program-keahlian">Program Keahlian</a>
                                            <a href="/#ekstrakurikuler">Ekstrakurikuler</a>
                                            <a href="/#galeri-foto-aktivitas">Galeri Foto Aktivitas</a>
                                            <a href="/#berita">Berita</a>
                                            <a href="/#cerita-alumni">Cerita Alumni</a>
                                        </div>
                                    </div>
                                    <a href="/alumni">Alumni</a>
                                    <a href="/tenaga-kerja">Tenaga Kerja</a>
                                    <a href="/galeri">Galeri</a>
                                    <a href="/berita">Berita</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="dropbtn nav-link nav-link-scroll-trigger">Program</a>
                                <div class="dropdown-content">
                                    <div class="dropdown-keahlian">
                                        <a class="dropbtn nav-link">Keahlian <i class="fas fa-caret-right"></i></a>
                                        <div class="dropdown-content-keahlian">
                                            <a href="/tkj">Teknik Komputer & Jaringan</a>
                                            <a href="/rpl">Rekayasa Perangkat Lunak</a>
                                            <a href="/mm">Multimedia</a>
                                            <a href="/perhotelan">Perhotelan</a>
                                            <a href="/jasa-boga">Jasa Boga</a>
                                            <a href="/bisnis-daring-&-pemasaran">Bisnis Daring & Pemasaran</a>
                                            <a href="/akuntansi-&-keuangan-lembaga">Akuntansi & Keuangan Lembaga</a>
                                            <a href="/otomatisasi-tata-kelola-perkantoran">Otomatisasi Tata Kelola
                                                Perkantoran</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-ekstrakurikuler">
                                        <a class="dropbtn nav-link">Ekstrakurikuler
                                            <i class="fas fa-caret-right"></i></a>
                                        <div class="dropdown-content-ekstrakurikuler">
                                            <a href="qiraat-lagu">Qiraat/Lagu</a>
                                            <a href="basket">Basket</a>
                                            <a href="voli">Voli</a>
                                            <a href="futsal">Futsal</a>
                                            <a href="bulutangkis">Bulutangkis</a>
                                            <a href="tenis-meja">Tenis Meja</a>
                                            <a href="marawis">Marawis</a>
                                            <a href="rebana">Rebana</a>
                                            <a href="nusapala">Nusapala (Pecinta Alam)</a>
                                            <a href="paduan-suara">Paduan Suara</a>
                                            <a href="rampak-bedug">Rampak Bedug</a>
                                            <a href="band">Band</a>
                                            <a href="tari-tradisional-modern">Tari Tradisional & Modern</a>
                                            <a href="english-conversation">English Conversation</a>
                                            <a href="pencaksilat">Pencaksilat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-scroll-trigger" aria-current="page" href="/kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-scroll-trigger" aria-current="page"
                                href="/streaming">Streaming</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-scroll-trigger" aria-current="page" href="/ppdb">PPDB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-scroll-trigger" aria-current="page" href="/logout">Logout</a>
                        </li>
                        <!-- <li class="nav-item pe-0">
                            <span style="cursor: pointer;" onclick="ubah()">🌓</span>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- END Navbar -->

    <!-- Hero  -->
    <div class="container-fluid banner-wrap p-0">
        <div class="container banner-container mx-auto p-0">
            <div class="row justify-content-between m-0">
                <div class="col-6 col-kiri p-0 my-auto">
                    <h1>Online Meeting</h1>
                </div>
                <div class="col-6 col-kanan p-0 text-end my-auto">
                    <img src="streaming-asset/img/meeting.svg">
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Content -->

    <div class="contaaner">

        <div class="row w-100 m-0">
            <div class="col-11 p-0 mx-auto">


                <div class="card my-5"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="card-header pb-0">
                        <h2 class="text-start">Data Streaming</h2>
                        <div class="col-12">
                            <a href="tambah" class="btn btn-sm btn-flat btn-primary  " data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                style="float: right; margin-bottom:5%; border: solid 2px #64DBB2 !important;"><i
                                    class="fa fa-plus" style="color: white;"></i> Tambah
                                Data</a>
                        </div>


                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">

                            <table class="table table-bordered">
                                <thead class="table-info">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal Meeting</th>
                                        <th scope="col">Jenis Rapat</th>
                                        <th scope="col">Waktu Rapat</th>
                                        <th scope="col">Judul Rapat</th>
                                        <th scope="col">Link</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datas)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $datas->tanggal_meting }}</td>
                                        <td>{{ $datas->jenis_rapat }}</td>
                                        <td>{{ $datas->waktu_rapat }}/SD Selesai</td>
                                        <td>{{ $datas->judul_rapat }}</td>
                                        <td>{{ $datas->link_rapat }}</a></td>
                                        {{-- <td>{{ $datas->alamat }}</td> --}}
                                        <td>
                                            <form action="delete_streaming/{{ $datas->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                {{-- <td> <span class="btn bg-danger" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-trash"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg></span> --}}
                                                <div class="col-12">
                                                    <button class="btn btn-danger submit" type="submit"
                                                        style="background-color:red !important"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                                                                style="color:aliceblue !important" />
                                                            <path fill-rule="evenodd"
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                                                                style="color:aliceblue !important" />
                                                        </svg></button>
                                            </form>
                                            <a href="{{ $datas->link_rapat }}" target="_blank"><button
                                                    class="btn btn-primary submit "
                                                    style="background-color:#00F5EC !important; border: solid 2px #00F5EC !important;"
                                                    data-toggle="modal" data-target="#modal_detail" type="button"><i
                                                        class="fas fa-sign-in-alt"
                                                        style="color: white"></i></button></a>

                                        </td>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Tambah Data</h5>

                </div>
                <form id="store" method="post" action="tambah_streaming">
                    @csrf
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="tanggal_metting">Tanggal :</label>
                                    <input required="" type="date" name="tanggal_meting" id="tanggal_metting"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="jenis_rapat">Jenis Rapat:</label>
                                    <input required="" type="text" name="jenis_rapat" id="jenis_rapat"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="waktu_rapat">Waktu Rapat</label>
                                    <input required="" type="time" name="waktu_rapat" id="waktu_rapat"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="judul_rapat">Judul Rapat:</label>
                                    <input required="" type="text" name="judul_rapat" id="judul_rapat"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 mt-2">
                                <div class="form-group">
                                    <label for="link_rapat">Link Rapat:</label>
                                    <input required="" type="text" name="link_rapat" id="link_rapat"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                style="background-color: red !important;border:none">Close</button>
                            <button type="submit" class="btn btn-primary"
                                style="  border: solid 2px #64DBB2 !important;"><i class="fas fa-save fa-fw"></i> Save
                                changes</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    {{-- endmodal --}}

    {{-- <div class="modal-footer">

    </div> --}}
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
        $(document).ready(function () {
            // AOS
            AOS.init({
                once: true
            });
        });

    </script>
</body>

</html>
