<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="w3hubs.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">


    <!-- css -->
    <link href="assets/css/login.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="assets/img/lg.png" rel="icon">
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

</head>

<body>
    <style>
        body {
            background-image: url('assets/img/back.png');
            background-size: cover;

        }
    </style>

    <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-md-7">
                <img src="assets/img/login.png" class="w-100";>
            </div>
            <div class="col-md-5">
                <form class="register-form" action="#" method="POST">
                    <div>
                        <h4>Selamat Datang</h4>
                        <p>Masukkan Email dan Password Anda</p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email"> 
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password"> 
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="remember"><label class="form-check-label" for="remember">Ingat selama 30 hari</label>
                            </div>
                            <div class="col">
                                <a href="#" id="lupaakun">Lupa Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="index.php" type="submit" class="btn btn-success w-100">Masuk</a>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-light w-100" ><b>Masuk dengan Google</b></button>
                    </div>
                    <p class="mb-0 text-center">Belum punya akun? Ayo <a href="register.php" class="text-decoration-none">Daftar</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>