<!doctype html>
<html lang="en">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<!-- link css -->
<link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

<!-- google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

<!-- icon bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

<title>Hello, world!</title>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="asset/img/lambang.png" alt="" width="30" height="30">
                <span class="">SISTEM INFORMASI MANAGAMENT MAHASISWA</span>
            </a>
        </div>
    </nav>
    <div class="container">

        <div class="img">

            <img class="wave" src="asset/img/wave.svg">

            <img class="img2-svg" src="asset/img/img2.svg">
        </div>
        <!-- form -->
        <div class="login-container">
            <form action="index.html">
                <div class="row">
                    <div class="col">
                        <h2>Selamat Datang</h2>
                        <img class="lambang-gowa" src="asset/img/lambang.png" alt="gowa" width="20%">

                        <!-- email -->
                        <div class="input-div one">
                            <div class="i">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h5>Masukkan Email</h5>
                                <input class="input" type="email">
                            </div>
                        </div>
                        <!-- password -->
                        <div class="input-div two">
                            <div class="i">
                                <i class="bi bi-file-earmark-lock2-fill"></i>
                            </div>
                            <div>
                                <h5>Masukkan Password</h5>
                                <input class="input" type="password">
                            </div>
                        </div>
                        <input type="submit" class="btn-login" value="Login">

                    </div>
            </form>
        </div>
    </div>

    <!-- img wave -->


    <!-- Javascript -->
    <script src="<?= base_url(); ?>/js/main.js"></script>
</body>

</html>