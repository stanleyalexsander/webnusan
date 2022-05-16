<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Tenaga Kerja - SMK Nusantara 1 Ciputat</title>

    <!-- CSS Sendiri -->
    <link rel="stylesheet" href="tenaga-kerja-asset/style.css">

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
                    <h1>Profil Tenaga Kerja</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Content -->
    <div class="container content-container p-0">
        <div class="row content-row p-0 m-0 justify-content-between">
            <div class="col-12 content-col p-0 mx-0 text-center">
                <h2>Struktur Organisasi</h2>
                <div class="card">
                    <div class="row">

                        <div class="col my-auto">
                            <img src="tenaga-kerja-asset/img/struktur-organisasi.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 content-col p-0 mx-0 text-center">
                <h2>Tenaga Kependidikan</h2>
                <div class="row">
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\1.PIMPINAN\14_RASUDDIN_HB_1.jpg') }}" alt="">
                            <p>Drs. Rasuddin, HB, MM, M.Pd </p>
                            <hr class="my-2">
                            <p>Kepala Sekolah</p>
                            <p>SMK Nusantara 1 Ciputat</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\1.PIMPINAN\02_IKA_KUSUMASTUTI_1.jpg') }}"
                                alt="">
                            <p>Ika Kusumastuti, S.Kom</p>
                            <hr class="my-2">
                            <p>Wakil Kepala Sekolah</p>
                            <p>Bidang Kurikulum</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\03._MUH_SARUJI_2.jpg') }}" alt="">
                            <p>Muhammad Saruji, HB, S.Ag, MM</p>
                            <hr class="my-2">
                            <p>Wakil Bidang</p>
                            <p>Kesiswaan</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\58._PANJI_HARDJIANTO.jpg') }}" alt="">
                            <p>Pandji Hardjianto, A.Md</p>
                            <hr class="my-2">
                            <p>Ketua Jurusan</p>
                            <p>Perhotelan</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\05._TARUDIN.jpg') }}" alt="">
                            <p>Tarudin, S.pd</p>
                            <hr class="my-2">
                            <p>Ketua Jurusan</p>
                            <p>Jasa Boga</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\06._INUNG.jpg') }}" alt="">
                            <p>Inung Idawati, SE</p>
                            <hr class="my-2">
                            <p>Ketua Jurusan</p>
                            <p>Bisnis Daring & Pemasaran</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\3.KAJUR\08_NURBAITI S Pd Kajur AKL.jpg') }}"
                                alt="">
                            <p>Nurbaiti, S.pd.</p>
                            <hr class="my-2">
                            <p>Ketua Jurusan</p>
                            <p class="">Akuntansi Keuangan & Lembaga</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\1.PIMPINAN\06_NURDIANSYAH_2.jpg') }}" alt="">
                            <p>Nurdiansyah, S.Kom., MM</p>
                            <hr class="my-2">
                            <p>Ketua Jurusan </p>
                            <p>TKJ & RPL</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}"
                                alt="">
                            <p>Ismowatie Lestari, S.T., M.pd</p>
                            <hr class="my-2">
                            <p>Ketua Jurusan</p>
                            <p>Multimedia</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\1.PIMPINAN\10_ARIEF_WIBOWO.jpg') }}" alt="">
                            <p>Arif Wibowo, S.Pd</p>
                            <hr class="my-2">
                            <p>Pembina OSIS</p>
                            <p>Guru Bidang Studi</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\11._IMA_MARYAMA.jpg') }}" alt="">
                            <p>Ima Maryama, M.Pd</p>
                            <hr class="my-2">
                            <p>Pembina Rohis</p>
                            <p>Guru Bidang Studi</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\12._NURJANAH_ZA.jpg') }}" alt="">
                            <p>Nurjanah, SE, MM</p>
                            <hr class="my-2">
                            <p>Pembina Pramuka</p>
                            <p>Guru Bidang Studi</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Drs. H. Faisal Bakar, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Bahasa Inggris</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\1.PIMPINAN\01_MARIEF_NOOR.jpg') }}" alt="">
                            <p>Muhammad Arief Noor, MM, M.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\15._SARTOYO_SOEMAN.jpg') }}" alt="">
                            <p>Sartoyo Soeman, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produktif Perhotelan</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\17._YUSRONI.jpg') }}" alt="">
                            <p>Yusroni, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produktif BDP</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\18._RUZAYANA.jpg') }}" alt="">
                            <p>Ruzayana, S.Pd, MM</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Bahasa Jepang</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\19._bahrozih.jpg') }}" alt="">
                            <p>Bahrozih, SE, MM</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>PKN</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\20._KANAAH_DJ.jpg') }}" alt="">
                            <p>Dra. Kana'ah Djamal, SE, MM</p>
                            <hr class="my-2">
                            <p>Koordinator</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Drs. Daeng Sibella</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Matematika</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Rokimah, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Kewirausahaan</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Wardoyo, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>APH</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\24._HUSNUL_UMMAH_2.jpg') }}" alt="">
                            <p>Husnul Ummah, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Bahasa Inggris</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\25._H.JONI_BASTIAN.jpg') }}" alt="">
                            <p>H. Joni Bastian, SE, MM</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>AKL</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\26._ANNIE_R.jpg') }}" alt="">
                            <p>Annie Rufaidah M.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Bahasa Jepang</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\27._MARINO.jpg') }}" alt="">
                            <p>Marino, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>PH</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\28._M._ARSYAD_NUUR.jpg') }}" alt="">
                            <p>Muhammad Arsyad Noor, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Kewirausahaan</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\29._HERDIANTO.jpg') }}" alt="">
                            <p>Herdianto, S.HI</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>PAI</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Salmawati Hutagalung, SH</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>PKN</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\31._MEULANA_MALAHAYATI.jpg') }}" alt="">
                            <p>Meulana Malahayati, S.Pd, MM</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produk Tata Boga</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\32._RINI_RAMDANI_YAFAS.jpg') }}" alt="">
                            <p>Rini Ramadani Yafas, SE, MM.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produktif BDP & Bahasa Inggris</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\33._SHARTIKA.jpg') }}" alt="">
                            <p>Shartika Wanitri S, S.Kom</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produktif TI</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\34._HANUM_NINGTYAS.jpg') }}" alt="">
                            <p>Hanum Ningtyas, M.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Bahasa Indonesia</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\35._ERNITA_K.jpg') }}" alt="">
                            <p>Ernita Krisnayanti, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produktif AKL</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Rasnan Effendi, S.Pd, MM</p>
                            <hr class="my-2">
                            <p>Koordinator Lab</p>
                            <p>PH</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\37._ICE_NURURROHMAH.jpg') }}" alt="">
                            <p>Ice Nurur Rohmah, M.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Fisika & Kimia</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Dra. Riskah Hutapea</p>
                            <hr class="my-2">
                            <p>Koordinator Lab</p>
                            <p>Restoran</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\39._HJ.TIENELFIA_A.jpg') }}" alt="">
                            <p>Dra. Hj. Tienelfia Agus</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Matematika</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\40._H.MACHFUD_ARIFIN.jpg') }}" alt="">
                            <p>H. Machfud Arifin, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Bahasa Inggris</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\41._EUIS_TIEN_M.jpg') }}" alt="">
                            <p>Euis Tien Muliawati, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Seni Budaya</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\6.TEKNISI\42_RANDI_AGUNG_P.jpg') }}" alt="">
                            <p>Randi Agung Priandana, S.Kom</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi TI</p>
                            <p>Teknisi Lab RPL</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Prima Risanti, ST</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produktif TI</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Susanto, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Penjaskes</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\6.TEKNISI\45_MSIDIK_JAELANI_P.jpg') }}"
                                alt="">
                            <p>M. Sidiq Jaelani Pangestu</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Teknik Lab MM</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\6.TEKNISI\46_SASTRA_WIJAYA.jpg') }}" alt="">
                            <p>Sastra Wijaya</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Teknik Lab TKJ</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\47._SADINI.jpg') }}" alt="">
                            <p>Sadini, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi PKN &</p>
                            <p>Guru Piket</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Drs. H. Muchlisin</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>PAI</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\6.TEKNISI\50_OKKI.jpg') }}" alt="">
                            <p>Oki Bagus Setiawan, S.Kom</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi TI</p>
                            <p>Teknisi Lab</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Irene Budi Habsari, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produktif Jasa Boga</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\52._KURNIA_INDAH_2.jpg') }}" alt="">
                            <p>Kurnia Indah Yunita, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produktif Tata Boga</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\53._ERMAWASA_A.jpg') }}" alt="">
                            <p>Ermawasa Agustina, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Bahasa Indonesia</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;" src="{{ asset('foto\53._ERMAWASA_A.jpg') }}" alt="">
                            <p>Hikmatullah, S.Kom</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produktif TI</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\55._MARINI.jpg') }}" alt="">
                            <p>Marini, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\56._ESTIKAJATI.jpg') }}" alt="">
                            <p>Estikajati, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Matematika</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\57._JAKA.jpg') }}" alt="">
                            <p>Jaka Mulyana, SE</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Produktif AKL</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\59._FEBIYOLA.jpg') }}" alt="">
                            <p>Febi Yola Anjani, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\60._INTAN_ADMALIA.jpg') }}" alt="">
                            <p>Intan Atmalia</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;" src="{{ asset('foto\60._INTAN_ADMALIA.jpg') }}"
                                alt="">
                            <p>Dedah Jubaedah, S.Pdi</p>
                            <hr class="my-2">
                            <p>Guru</p>
                            <p>BP & BK</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\63._SYIFA_MHJ.jpg') }}" alt="">
                            <p>Syifa, MHJ, S.Psi</p>
                            <hr class="my-2">
                            <p>Guru</p>
                            <p>BP & BK</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\64._FILMA_YENTI_2.jpg') }}" alt="">
                            <p>Filmayenti, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru</p>
                            <p>BP & BK</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\66._SYAHRI_AHMAD.jpg') }}" alt="">
                            <p>Syahri Ahmad, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Piket</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\67._WAHID_N_DAES.jpg') }}" alt="">
                            <p>Wahid Nur Dais</p>
                            <hr class="my-2">
                            <p>Guru Piket</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Fajril Abadi, S.Pd</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi Penjaskes</p>
                            <p>Piket</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\2.TATA USAHA\69_MINARNI.jpg') }}" alt="">
                            <p>Minarni, S.Pd, MM</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi B. Indonesia</p>
                            <p>Kepala TU</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\2.TATA USAHA\70_MAMAN_F.jpg') }}" alt="">
                            <p>Maman Fathurahman, SE</p>
                            <hr class="my-2">
                            <p>Kepala TU</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\2.TATA USAHA\71_NURHIDAYAT.jpg') }}" alt="">
                            <p>Nurhidayat, SE. MM</p>
                            <hr class="my-2">
                            <p>Staf TU</p>
                            <p>Humas & Operator Dapodik</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\2.TATA USAHA\72_JAELANI.jpg') }}" alt="">
                            <p>Jaelani, SE, MM</p>
                            <hr class="my-2">
                            <p>Staff TU</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\2.TATA USAHA\73_MIFTAHUL_MIRZA.jpg') }}"
                                alt="">
                            <p>Miftahul Mirza, S.Kom</p>
                            <hr class="my-2">
                            <p>Staff TU</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\2.TATA USAHA\74_AKBAR_SOHEH.jpg') }}" alt="">
                            <p>Akbar Soheh</p>
                            <hr class="my-2">
                            <p>Staff TU</p>
                            <p>Pelatih Futsal</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\75._HAFIFAH.jpg') }}" alt="">
                            <p>Hafifah Fajriah, SE</p>
                            <hr class="my-2">
                            <p>Ketua Bagian</p>
                            <p>Keuangan</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\4.KEUANGAN\77_FAJAR_P.jpg') }}" alt="">
                            <p>Fajar Panjira, SE, MM</p>
                            <hr class="my-2">
                            <p>Pembukuan</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\4.KEUANGAN\77_ARIE_CHANDRAWATI.jpg') }}"
                                alt="">
                            <p>Arie Chandrawati, SE, MM</p>
                            <hr class="my-2">
                            <p>Kasir</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\4.KEUANGAN\78_ADILA.jpg') }}" alt="">
                            <p>A'dilah, SE, MM</p>
                            <hr class="my-2">
                            <p>Kasir & Keuangan</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\80._ADE_PERMATA_AYU_LELI.jpg') }}" alt="">
                            <p>Ade Permata Ayu Leli</p>
                            <hr class="my-2">
                            <p>Staff Perpustakaan</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\81._DINDAA.jpg') }}" alt="">
                            <p>Dinda Nur Anisa</p>
                            <hr class="my-2">
                            <p>Staff Klinik</p>
                            <p>Kampus 2</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" style="opacity: 0;"
                                src="{{ asset('foto\PROFILE\1.PIMPINAN\07_ISMOWATI_LESTARI_2.jpg') }}" alt="">
                            <p>Ramdinah Pratiwi</p>
                            <hr class="my-2">
                            <p>Staff Klinik</p>
                            <p>Kampus 1</p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\5.RUMAH TANGGA\81_HUSEN.jpg') }}" alt="">
                            <p>Husein</p>
                            <hr class="my-2">
                            <p>Pembantu Umum</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 mb-3">
                        <div class="card">
                            <img class="mb-3" src="{{ asset('foto\PROFILE\5.RUMAH TANGGA\SUGANDA.jpg') }}" alt="">
                            <p>Suganda, SP</p>
                            <hr class="my-2">
                            <p>Bagian</p>
                            <p>Rumah Tangga</p>
                        </div>
                    </div>
                    {{-- <div class="col-2">
                        <div class="card">
                            <img class="mb-3" src="tenaga-kerja-asset/img/pak-randi.jpg" alt="Bu Ika">
                            <p>Nama Lengkap, Gelar</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Mata Pelajaran</p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <img class="mb-3" src="tenaga-kerja-asset/img/pak-randi.jpg" alt="Bu Ika">
                            <p>Nama Lengkap, Gelar</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Mata Pelajaran</p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card">
                            <img class="mb-3" src="tenaga-kerja-asset/img/pak-randi.jpg" alt="Bu Ika">
                            <p>Nama Lengkap, Gelar</p>
                            <hr class="my-2">
                            <p>Guru Bidang Studi</p>
                            <p>Mata Pelajaran</p>
                        </div>
                    </div> --}}
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
        $(document).ready(function () {
            // AOS
            AOS.init({
                once: true
            });
        });

    </script>
</body>

</html>
