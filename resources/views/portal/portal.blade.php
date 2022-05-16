<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>SMK Nusantara 1 Ciputat</title>

    <!-- CSS Sendiri -->
    <link rel="stylesheet" href="portal-asset/style.css">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700&display=swap"
        rel="stylesheet">

    <!-- CSS Icon -->
    <link rel="stylesheet" href="vendor/fontawesome-free-5.15.4/css/all.min.css">

    <!-- CSS Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- CSS Fancyapps -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    <!-- CSS AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS Pannelum -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css" />
</head>
<style>
    #latar-belakang {
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url("{{ asset('portal-asset/img/gedung-smk-nusantara.png') }}");
    }

</style>

<body>

    <!-- Navbar -->
    <div class="navbar-scroll-trigger"></div>
    <div class="navbar-container-wrap container-fluid sticky-top p-0">
        <nav class="navbar navbar-expand-lg">
            <img class="hero-img-lingkaran position-absolute" src="{{ asset('portal-asset/img/lingkaran.svg') }}">
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
                                        <a class="dropbtn nav-link ">Home <i
                                                class="fas fa-caret-right"></i></a>
                                        <div class="dropdown-content-home">
                                            <a href="#visi-misi">Visi Misi</a>
                                            <a href="#sambutan">Sambutan</a>
                                            <a href="#latar-belakang">Latar Belakang</a>
                                            <a href="#fasilitas-sekolah">Fasilitas Sekolah</a>
                                            <a href="#video-profil">Video Profil</a>
                                            <a href="#jumlah-siswa">Jumlah Siswa</a>
                                            <a href="#program-keahlian">Program Keahlian</a>
                                            <a href="#ekstrakurikuler">Ekstrakurikuler</a>
                                            <a href="#galeri-foto-aktivitas">Galeri Foto Aktivitas</a>
                                            <a href="#berita">Berita</a>
                                            <a href="#cerita-alumni">Cerita Alumni</a>
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
                        <!-- <li class="nav-item pe-0">
                            <span style="cursor: pointer;" onclick="ubah()">🌓</span>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- END Navbar -->

    <!-- Wrapper -->

    <!-- Hero -->
    <div class="container-fluid hero-container p-0">
        <div class="row m-0 position-relative justify-content-between">
            <img class="p-0 position-absolute" src="{{ asset('portal-asset/img/guru-guru.jpg') }}" alt="">
            <h1 class="m-auto text-center p-0 position-relative text-white">"<span class="text-white"
                    id="typeItJudul"></span>"</h1>
            <!-- <div class="col hero-col-kiri">
                <h2 class="text-white">Menciptakan Peserta Didik yang Berakhlak Mulia dan Berkompeten</h2>
            </div>
            <div class="col hero-col-kanan p-0 text-center">
                <img class="h-100 " src="portal-asset/img/murid.png">
            </div> -->
        </div>
    </div>
    <!-- END Hero -->

    <div class="container content-wrap m-auto">
        <!-- Content 1 -->
        <div class="container-fluid content-1-container p-0" id="visi-misi" data-aos="fade-up" data-aos-duration="800">
            <div class="row text-center visi-misi">
                <h2>Visi</h2>
                <p class="visi">
                    "Menjadikan peserta didik sebagai tenaga kerja terampil, profesional dan berakhlak mulia"
                </p>

                <h2>Misi</h2>
                <div class="col text-start ps-0">
                    <ul>
                        <li>
                            Melaksanakan pendidikan dan pengajaran yang bersifat teoritas dan praktis dalam kerangka
                            personalitas
                        </li>
                        <li>
                            Menintegrasikan ilmu umum dengan ilmu agama yang bermoral religius
                        </li>
                        <li class="m-0">
                            Mengedepankan pendidikan agama dalam menciptakan tenaga kerja berakhlak mulia
                        </li>
                    </ul>
                </div>
                <div class="col text-start pe-0">
                    <ul>
                        <li>
                            Mendidik tenaga terampil melalui guru industri berpengalaman dan dapat dipertanggung
                            jawabkan sehingga lulusannya lebih diminati stake holders dan mampu mandiri
                        </li>
                        <li>
                            Industri pemerintahdan swasta sebagai partner dalam pengembangan kompetensi peserta didik
                            untuk job training dan penempatan kerja
                        </li>
                        <li class="m-0">
                            Setiap alumni di bekali sikap mental dan mampu bersaing memasuki dunia kerja
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END Content 1 -->

        <!-- Content 2 -->
        <div class="container-fluid content-2-container p-0" id="sambutan">
            <div class="row m-0 p-0 justify-content-between">
                <div class="col content-2-col-kiri p-0 my-auto" data-aos="fade-left" data-aos-duration="800">
                    <p>Sambutan</p>
                    <h2>Kepala Sekolah</h2>
                    <p>
                        Selamat datang di website SMK Nusantara 1 Ciputat yang saya tujukan untuk seluruh
                        unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses
                        seluruh informasi tentang sekolah kami. Tentunya dalam penyajian informasi masih
                        banyak
                        kekurangan, oleh karena itu mohon saran dan kritik demi kemajuan lebih lanjut.
                        <br><br> Saya berharap Website ini dapat dijadikan wahana interaksi yang positif,
                        sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan
                        berkarya dengan mengharap ridho sang Kuasa dan keikhlasan
                        yang tulus demi anak bangsa.
                        <br><br>
                        <span>- Drs. Rasuddin HB, MM, M.Pd</span>
                    </p>
                </div>
                <div class="img-content position-absolute end-0 p-0 m-0">
                    <img src="{{ asset('portal-asset/img/kepala-sekolah (1).png') }}" alt="kepala-sekolah">
                </div>
            </div>
        </div>
        <!-- END Content 2 -->
    </div>


    <!-- Content 3 -->
    <div class="container-fluid content-3-container py-5" id="latar-belakang">
        <div class="container content-wrap m-auto">
            <div class="row m-0 justify-content-end">
                <div class="img-content position-absolute start-0 p-0 m-0">
                    <img src="{{ asset('portal-asset/img/gedung.png') }}" alt="kepala-sekolah">
                </div>
                <div class="col content-3-col-kanan p-0 my-auto" data-aos="fade-right" data-aos-duration="800">
                    <h2 class="text-white">Latar Belakang</h2>
                    <p class="m-0 text-white">
                        Sebagai salah satu sekolah unggulan, kami hadir di Selatan Jakarta telah berpengalaman lebih
                        dari 20 Tahun. Berada di lokasi yang sangat strategis dekat dengan perbatasan antara provinsi
                        Banten dengan Ibu Kota DKI Jakarta sebagai pusat Bisnis dan Pemerintahan.
                        Untuk itu kehadiran kami untuk membantu program pemerintah dalam mencerdaskan anak bangsa
                        berkomitmen mencetak alumnitamatan siap bekerja, terampil, profesional dan berakhlak mulia.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Content 3 -->

    <div class="container content-wrap m-auto">
        <!-- Content 1.2 -->
        <div class="container-fluid content-1-container p-0" id="fasilitas-sekolah">
            <div class="row m-0 justify-content-between">
                <h2 class="text-center p-0">Fasilitas Sekolah</h2>
                <div class="col-sm-6 col-lg-2 col-sm-4 text-center" data-aos="fade-up" data-aos-duration="200">
                    <div class="card masjid rounded">
                        <a data-fancybox-trigger="masjid" href="javascript:;">
                            <div class="card-body rounded" id="masjid">
                                <div class="overlay"></div>
                                <div class="circle mx-auto">
                                    <i class="fas fa-mosque" style="z-index: 999"></i>
                                </div>
                                <p style="z-index: 999">Masjid</p>
                            </div>
                        </a>
                        <a data-fancybox="masjid" href="https://lipsum.app/id/60/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                        <a data-fancybox="masjid" href="https://lipsum.app/id/61/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                        <a data-fancybox="masjid" href="https://lipsum.app/id/62/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 col-sm-4 text-center" data-aos="fade-up" data-aos-duration="300">
                    <div class="card  card_fasilitas perpustakaan rounded">
                        <a data-fancybox-trigger="perpustakaan" href="javascript:;">
                            <div class="card-body">
                                <div class="overlay"></div>
                                <div class="circle mx-auto">
                                    <i class="fas fa-book" style="z-index: 999"></i>
                                </div>
                                <p style="z-index: 999">Perpustakaan</p>
                            </div>
                        </a>
                        <a data-fancybox="perpustakaan" href="https://lipsum.app/id/60/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                        <a data-fancybox="perpustakaan" href="https://lipsum.app/id/61/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                        <a data-fancybox="perpustakaan" href="https://lipsum.app/id/62/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 col-sm-4 text-center" data-aos="fade-up" data-aos-duration="400">
                    <div class="card lapangan rounded">
                        <a data-fancybox-trigger="lapangan" href="javascript:;">
                            <div class="card-body">
                                <div class="overlay "></div>
                                <div class="circle mx-auto">
                                    <i class="fas fa-running " style="z-index: 999 "></i>
                                </div>
                                <p class="m-0 ">Lapangan</p>
                            </div>
                        </a>
                        <a data-fancybox="lapangan" href="https://lipsum.app/id/62/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                        <a data-fancybox="lapangan" href="https://lipsum.app/id/62/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 col-sm-4 text-center" data-aos="fade-up" data-aos-duration="500">
                    <div class="card lab rounded">
                        <a data-fancybox-trigger="laboratorium" href="javascript:;">
                            <div class="card-body">
                                <div class="overlay "></div>
                                <div class="circle mx-auto">
                                    <i class="fas fa-flask " style="z-index: 999 "></i>
                                </div>
                                <p style="z-index: 999 ">Lab</p>
                            </div>
                        </a>
                        <a data-fancybox="laboratorium" href="https://lipsum.app/id/62/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                        <a data-fancybox="laboratorium" href="https://lipsum.app/id/62/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 col-sm-4 text-center" data-aos="fade-up" data-aos-duration="600">
                    <div class="card kantin rounded">
                        <a data-fancybox-trigger="kantin" href="javascript:;">
                            <div class="card-body">
                                <div class="overlay "></div>
                                <div class="circle mx-auto">
                                    <i class="fas fa-utensils " style="z-index: 999 "></i>
                                </div>
                                <p class="m-0 ">Kantin</p>
                            </div>
                        </a>
                        <a data-fancybox="kantin" href="https://lipsum.app/id/62/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                        <a data-fancybox="kantin" href="https://lipsum.app/id/62/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 col-sm-4 text-center" data-aos="fade-up" data-aos-duration="700">
                    <div class="card parkir rounded">
                        <a data-fancybox-trigger="parkir" href="javascript:;">
                            <div class="card-body">
                                <div class="overlay "></div>
                                <div class="circle mx-auto">
                                    <i class="fas fa-parking " style="z-index: 999 "></i>
                                </div>
                                <p class="m-0 ">Halaman Parkir</p>
                            </div>
                        </a>
                        <a data-fancybox="parkir" href="https://lipsum.app/id/62/1800x1200"
                            data-caption="Vestibulum lobortis ultricies ipsum, a maximus ligula dignissim in. Sed consectetur tellus egestas, consequat dolor at, tempus augue."></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Content 1.2 -->

        <!-- Content 2.2 -->
        <div class="container-fluid content-2-container p-0" id="video-profil">
            <div class="row row-video-profil justify-content-between p-0 m-0">
                <div class="col content-2-col-kiri p-0 my-auto" data-aos="fade-left" data-aos-duration="800">
                    <p>Kuy, nonton!</p>
                    <h2>Video Profil</h2>
                    <p>
                        Video profil sekolah memperkenalkan kepada kalian hal-hal berkaitan dengan lingkungan sekolah,
                        fasilitas umum sekolah, fasilitas pembelajaran, ruang belajar, kegiatan siswa dan masih banyak
                        lagi.
                        <br><br> Biar kalian tidak penasaran apa saja yang ada di dalam SMK Nusantara 1 Ciputat, segera
                        tonton video profilnya.
                    </p>
                    <a data-fancybox-trigger="mulai-video" href="javascript:;">
                        <button class="btn rounded-pill" id="mulai-video"><i class="fas fa-play text-white pe-1"></i>
                            Mulai video</button>
                    </a>
                    <a data-fancybox="mulai-video" href="https://www.youtube.com/embed/RqlZHi0FZVs">
                    </a>
                </div>
                <div class="img-content position-absolute end-0 p-0 m-0">
                    <img src="{{ asset('portal-asset/img/video.svg') }}">
                </div>
            </div>
        </div>
        <!-- END Content 2.2 -->
    </div>
    <!-- END Wrapper -->

    <!-- Content 5 -->
    <div class="container-fluid content-5-container p-0" id="jumlah-siswa">
        <div class="row-wrap m-0">
            <div class="col-12 content-5-col-wrap">
                <h2>Siswa Kami Lebih dari 1000+</h2>
            </div>
            <div class="col-12 mx-auto content-wrap">
                <div class="row m-0 justify-content-around text-center">
                    <div class="col-3 col-jumlah-data-siswa ps-0 m-0">
                        <p class="m-0 text-white">Rumpun<br>TI</p>
                        <h2 class="m-0">439</h2>
                    </div>
                    <div class="col-3 col-jumlah-data-siswa m-0 ps-0">
                        <p class="m-0 text-white">Rumpun<br>Bisnis & Manajemen</p>
                        <h2 class="m-0">503</h2>
                    </div>
                    <div class="col-3 col-jumlah-data-siswa m-0 ps-0">
                        <p class="m-0 text-white">Rumpun<br>Pelayanan</p>
                        <h2 class="m-0">288</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Content 5 -->

    <div class="container content-wrap m-auto">
        <!-- Content 4 -->
        <div class="container-fluid content-4-container p-0 " id="program-keahlian">
            <div class="row m-0 justify-content-between ">
                <h2 class="text-center p-0 jurusan ">Program Keahlian</h2>
                <div class="col-sm-3 col-content-4 text-center " data-aos="fade-up" data-aos-duration="200">
                    <a href="tkj">
                        <div class="card rounded">
                            <img src="{{ asset('portal-asset/img/tkj.jpg') }}" alt=" TKJ">
                            <p class="m-0">Teknik Komputer & Jaringan</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-content-4 text-center " data-aos="fade-up" data-aos-duration="300">
                    <a href="rpl">
                        <div class="card rounded">
                            <img src="{{ asset('portal-asset/img/rpl.jpg') }}" alt="RPL">
                            <p class="m-0">Rekayasa Perangkat Lunak</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-content-4 text-center " data-aos="fade-up" data-aos-duration="400">
                    <a href="mm">
                        <div class="card rounded">
                            <img src="{{ asset('portal-asset/img/multimedia.png') }}" alt="Multimedia">
                            <p class="m-0">Multimedia</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-content-4 text-center " data-aos="fade-up" data-aos-duration="500">
                    <a href="perhotelan">
                        <div class="card rounded">
                            <img src="{{ asset('portal-asset/img/perhotelan.png') }}" alt="Perhotelan">
                            <p class="m-0">Perhotelan</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-content-4 text-center " data-aos="fade-up" data-aos-duration="200">
                    <a href="jasa-boga">
                        <div class="card rounded">
                            <img src="{{ asset('portal-asset/img/jasa-boga.png') }}" alt="Jasa Boga">
                            <p class="m-0">Jasa Boga</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-content-4 text-center " data-aos="fade-up" data-aos-duration="300">
                    <a href="bisnis-daring-&-pemasaran">
                        <div class="card rounded">
                            <img src="{{ asset('portal-asset/img/bisnis.png') }}" alt="Bisnis Daring & Pemasaran">
                            <p class="m-0">Bisnis Daring & Pemasaran</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-content-4 text-center " data-aos="fade-up" data-aos-duration="400">
                    <a href="akuntansi-&-keuangan-lembaga">
                        <div class="card rounded">
                            <img src="{{ asset('portal-asset/img/akuntansi.png') }}" alt="Akuntansi">
                            <p class="m-0">Akuntansi & Keuangan Lembaga</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-content-4 text-center " data-aos="fade-up" data-aos-duration="500">
                    <a href="otomatisasi-tata-kelola-perkantoran">
                        <div class="card rounded">
                            <img src="{{ asset('portal-asset/img/otkp.png') }}"
                                alt="Otomatisasi Tata Kelola Perkantoran">
                            <p class="m-0">Otomatisasi Tata Kelola Perkantoran</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row m-0" id="ekstrakurikuler">
                <h2 class="text-center p-0 jurusan ">Ekstrakurikuler</h2>
                <div class="col-sm-2 col-content-4 text-center" data-aos="fade-up" data-aos-duration="200">
                    <a href="qiraat-lagu">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-music"></i>
                                <p class="m-0">Qiraat/Lagu</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="300">
                    <a href="basket">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-basketball-ball"></i>
                                <p class="m-0">Basket</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="400">
                    <a href="voli">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-volleyball-ball"></i>
                                <p class="m-0">Voli</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="500">
                    <a href="futsal">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-futbol"></i>
                                <p class="m-0">Futsal</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="600">
                    <a href="bulutangkis">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">Bulutangkis</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="700">
                    <a href="tenis-meja">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">Tenis Meja</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="200">
                    <a href="marawis">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">Marawis</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="300">
                    <a href="rebana">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">Rebana</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="400">
                    <a href="nusapala">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">Nusapala (Pecinta Alam)</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="500">
                    <a href="paduan-suara">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">Paduan Suara</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="600">
                    <a href="rampak-bedug">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">Rampak Bedug</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="700">
                    <a href="band">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">Band</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="200">
                    <a href="tari-tradisional-modern">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">Tari Tradisional dan Modern</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="300">
                    <a href="english-conversation">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">English Conversation</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-content-4 text-center " data-aos="fade-up" data-aos-duration="400">
                    <a href="pencaksilat">
                        <div class="card rounded">
                            <div class="my-auto">
                                <i class="fas fa-flag"></i>
                                <p class="m-0">Pencaksilat dan Beladiri lainnya</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END Content 4 -->
    </div>
    <!-- END Wrapper -->

    <!-- Content 5.2 -->
    <div class="container-fluid content-5-container p-0" id="galeri-foto-aktivitas">
        <div class="row-wrap m-0">
            <div class="col-12 content-5-col-wrap">
                <p>Yuk, kenal lebih dalam tentang SMK Nusantara 1</p>
                <h2>Galeri Foto Aktivitas</h2>
            </div>
            <div class="col-12 col-slider">
                <div class="photo-slide slider">
                    <div>
                        <a href="galeri">
                            <img src="portal-asset/img/17 agustusan siswa.JPG">
                        </a>
                    </div>
                    <div>
                        <a href="galeri">
                            <img src="portal-asset/img/anak basket claudia.jpeg">
                        </a>
                    </div>
                    <div>
                        <a href="galeri">
                            <img src="portal-asset/img/Ekstrakulikuler Coffe ( Latte Art ) (1).jpeg">
                        </a>
                    </div>
                    <div>
                        <a href="galeri">
                            <img src="portal-asset/img/futsal event pocari.jpeg">
                        </a>
                    </div>
                    <div>
                        <a href="galeri">
                            <img src="portal-asset/img/IMG_4414.JPG">
                        </a>
                    </div>
                    <div>
                        <a href="galeri">
                            <img src="portal-asset/img/juara esport.jpeg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Content 5.2 -->



    <!-- Wrapper -->
    <div class="container content-wrap content-6-wrap-bg p-0 m-auto">
        <!-- Content 6 -->
        <div class="container-fluid content-6-container p-0">
            <div class="row berita-row justify-content-between p-0" id="berita">
                <h2 class="p-0 text-center ms-0">Berita Terbaru</h2>
                <p class="p-0 text-center">Ikuti terus informasi dan berita-berita terbaru tentang SMK Nusantara 1
                    Ciputat.</p>
                <div class="col-4 h-100 pb-4">
                    <a href="acara-lomba-17-agustus">
                        <div class="card text-white">
                            <img class="rounded h-100" src="portal-asset/img/17 agustusan siswa.JPG">
                            <div class="card-img-overlay">
                                <p class="card-title text-white">Acara lomba 17 Agustus</p>
                                <p class="card-text text-white"><i class="fas fa-calendar text-white"></i> 17 Austus
                                    2019</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 h-100 pb-4">
                    <a href="acara-lomba-17-agustus">
                        <div class="card text-white">
                            <img class="rounded h-100" src="portal-asset/img/17 agustusan siswa.JPG">
                            <div class="card-img-overlay">
                                <p class="card-title text-white">Acara lomba 17 Agustus</p>
                                <p class="card-text text-white"><i class="fas fa-calendar text-white"></i> 17 Austus
                                    2019</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 h-100 pb-4">
                    <a href="acara-lomba-17-agustus">
                        <div class="card text-white">
                            <img class="rounded h-100" src="portal-asset/img/17 agustusan siswa.JPG">
                            <div class="card-img-overlay">
                                <p class="card-title text-white">Acara lomba 17 Agustus</p>
                                <p class="card-text text-white"><i class="fas fa-calendar text-white"></i> 17 Austus
                                    2019</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 h-100 pb-4">
                    <a href="berita">
                        <div class="card text-white">
                            <div class="rounded card-img-overlay-tampilkan-semua h-100">
                                <p class="card-title text-white">Semua Berita</p>
                                <p class="card-text text-white">Tampilkan semua</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row cerita-alumni-row m-0 p-0" id="cerita-alumni">
                <h2 class="p-0">Cerita Alumni</h2>
                <div id="carouselCeritaAlumni" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up"
                    data-aos-duration="800">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="20000">
                            <div class="row m-0 justify-content-between">
                                <div class="col content-6-col-kiri p-0 my-auto">
                                    <img src="portal-asset/img/quote.svg">
                                    <p class="m-0">
                                        Saya salah satu alumni dari jurusan Akuntansi, selepas SMK melanjutkan kuliah di
                                        jurusan yang sama. Alhamdulillah ilmu yang di dapat di jurusan membantu dan
                                        memudahkan saya mendapatkan pekerjaan yang saya impikan, saya bekerja di KAP BDO
                                        Tanubrata & Adviser
                                        sebagai Senior Auditor.
                                        <br><br>
                                        <span>- Jaka Mulya</span>
                                    </p>
                                    <br>
                                    <div class="text-end">
                                        <a href="alumni">
                                            <button class="btn rounded-pill">Selengkapnya</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col content-6-col-kanan p-0">
                                    <img src="portal-asset/img/jaka-mulya.jpg" alt="Jaka Mulya">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="20000">
                            <div class="row m-0 justify-content-between">
                                <div class="col content-6-col-kiri p-0 my-auto">
                                    <img src="portal-asset/img/quote.svg">
                                    <p class="m-0">
                                        Alumni Jurusan Multimedia, namun kompetensi lainpun dia kembangkan, sehingga
                                        berhasil meraih juara pada ajang festival kopi sedunia di Prancis.
                                        <br><br>
                                        <span>- Santoso Ardiansyah</span>
                                    </p>
                                    <br>
                                    <div class="text-end">
                                        <a href="alumni">
                                            <button class="btn rounded-pill">Selengkapnya</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col content-6-col-kanan p-0">
                                    <img src="portal-asset/img/santoso-ardiansyah.jpg" alt="Santoso Ardiansyah">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCeritaAlumni"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCeritaAlumni"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- END Content 6 -->
    </div>

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
    <!-- END Wrapper -->


    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JS Slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- JS Fancyapps -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

    <!-- JS AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JS Pannelum -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

    <!-- JS TypeIt -->
    <script src="https://unpkg.com/typeit@8.2.0/dist/index.umd.js"></script>

    <!-- JS Eksekusi -->
    <script type="text/javascript">
        // Scroll Navbar
        $(document).ready(function () {
            $(document).scroll(function () {
                var $nav = $(".navbar");
                var $trigger = $(".navbar-scroll-trigger")
                $nav.toggleClass('scrolled', $(this).scrollTop() > $trigger.height());
            });

            $(window).scroll(function () {
                var initialSrc = "portal-asset/img/logo-hitam.png";
                var scrollSrc = "portal-asset/img/logo.png";

                var $trigger = $(".navbar-scroll-trigger");
                var value = $(this).scrollTop();
                if (value > $trigger.height())
                    $("#navbar-logo").attr("src", scrollSrc);
                else
                    $("#navbar-logo").attr("src", initialSrc);
            });

            // Slick
            $('.photo-slide').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                centerMode: true,
                variableWidth: true
            });


            // AOS
            AOS.init({
                once: true
            });
        });


        //Scroll Anchor
        let anchorSelector = 'a[href^="#"]';
        $(anchorSelector).on('click', function (e) {
            e.preventDefault();
            let destination = $(this.hash);
            let scrollPosition = destination.offset().top - 150;
            let animationDuration = 5;
            $('html, body').animate({
                scrollTop: scrollPosition
            }, animationDuration);
        });

        // Dark Mode
        var element = document.body;

        // function ubah() {
        //     element.classList.toggle('gelap');
        // }

        // // Pannelum
        // pannellum.viewer('panorama', {
        //     "type": "equirectangular",
        //     "panorama": "portal-asset/img/smk-nusantara.jpg",
        //     "autoRotate": -2,
        //     "autoLoad": true,
        //     "hfov": 120,
        //     "mouseZoom": false,
        //     "pitch": 25
        // });

        // TypeIt
        // new TypeIt("#typeItJudul", {
        //         strings: ["Menciptakan Peserta Didik yang",
        //             "Berakhlak Mulia dan Berkompeten"
        //         ],
        //         speed: 80,
        //         waitUntilVisible: true,
        //     })
        //     .go();

        new TypeIt("#typeItJudul", {
                speed: 55,
            })
            .type("Menjadikan Lulusan")
            .pause(250)
            .delete(7)
            .type("Siswa")
            .pause(250)
            .delete(5)
            .type("Peserta Didik Sebagai Tenaga Kerja Terampil")
            .break()
            .type("Profesional dan Berakhlak Mulia")
            .go();

    </script>




    </html>
