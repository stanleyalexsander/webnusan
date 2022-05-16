{{-- <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/icon type">
    <title>Login - SMK Nusantara 1 Ciputat</title>
    <!-- My CSS -->
    <link href="{{ asset('login-asset/style.css') }}" rel="stylesheet" />
    <!-- My JS -->
    <script src="{{ asset('login-asset/showPassword.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Bootsrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Jumbotron -->
    <header class="masthead">
        <div class="container h-100 position-absolute top-50 start-50 translate-middle">
            <!-- Navbar -->
            <nav class="navbar container-navbar navbar-light navbar-expand-md bg-faded mx-auto">
                <div class="container">
                    <a href="/" class="navbar-brand d-flex w-50 me-auto"><img src="login-asset/image/logo.svg" /></a>
                </div>
            </nav>
            <!-- END Navbar -->
            <!-- Content -->
            <div class="container-content row align-items-center position-absolute top-50 start-50 translate-middle">
                <div class="col col-kiri">
                    <img src="login-asset/image/ilustrasi.svg">
                </div>
                <div class="col col-kanan">
                    <form method="post" action="login">
                        @csrf
                        <h1>Selamat Datang!</h1>
                        <div class="mb-3">
                            <label for="nis-id" class="form-label">NIS/Username</label>
                            <input type="email" class="form-control bg-white" id="nis-id" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="nis-id" class="form-label">Password</label>
                            <a class="bi bi-info-circle-fill" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Password sesuai dengan tanggal lahir Siswa. Format Password adalah DDMMYYYY dari tanggal lahir, contoh: 17082002"></a>
                            <input type="password" class="form-control bg-white" name="password" id="password"
                                placeholder="DDMMYYYY">
                            <input type="checkbox" class="show-pass" onclick="myFunction()">Show Password
                        </div>
                        <button type="submit" class="btn btn-login">Login</button>
                    </form>
                </div>
            </div>
            <!-- END Content -->
        </div>
    </header>
    <!-- END Jumbotron-->

    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html> --}}
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/icon type">
    <title>Login - SMK Nusantara 1 Ciputat</title>
    <!-- My CSS -->
    <link href="login-asset/style.css" rel="stylesheet" />
    <!-- My JS -->
    <script src="login-asset/showPassword.js"></script>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700&display=swap"
        rel="stylesheet">
    <!-- CSS Icon -->
    <link rel="stylesheet" href="vendor/fontawesome-free-5.15.4/css/all.min.css">
    <!-- Bootsrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Jumbotron -->
    <header class="masthead">
        <div class="container p-0 h-100 position-absolute top-50 start-50 translate-middle">
            <!-- Navbar -->
            <nav class="navbar container-navbar navbar-light navbar-expand-md bg-faded mx-auto">
                <div class="container">
                    <a href="portal" class="navbar-brand d-flex w-50 me-auto"><img
                            src="portal-asset/img/logo-hitam.png" /></a>
                </div>
            </nav>
            <!-- END Navbar -->
            <!-- Content -->
            <div class="container-content row align-items-center position-absolute top-50 start-50 translate-middle">
                <div class="col col-kiri">
                    <img src="login-asset/image/ilustrasi.svg">
                </div>
                <div class="col col-kanan">
                    <form method="post" action="login">
                        @csrf
                        <h1>Selamat Datang!</h1>
                        <div class="mb-3">
                            <label for="email" class="form-label">Username</label>
                            <input type="email" class="form-control bg-white" name="email" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="nis-id" class="form-label">Password</label>
                            <a class="bi bi-info-circle-fill" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="Password sesuai dengan tanggal lahir Siswa. Format Password adalah DDMMYYYY dari tanggal lahir, contoh: 17082002"></a>
                            <input type="password" class="form-control bg-white" id="password" name="password" required>
                            <input type="checkbox" class="show-pass" onclick="myFunction()">Show Password

                        </div>
                        <a href="/"> <button type="button" class="btn btn-primary"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-square-fill text-white" viewBox="0 0 16 16">
                                    <path
                                        d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"
                                        style='color:white;' />
                                </svg>&nbsp;Kembali</button></a>

                        <button type="submit" class="btn btn-login mb-5">Login</button>
                    </form>

                </div>

            </div>
            <!-- END Content -->
        </div>
    </header>
    <!-- END Jumbotron-->
    @include('sweetalert::alert')
    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html>
