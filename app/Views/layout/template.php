<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIM Magang</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;1,400&family=Roboto+Mono&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Menghubungkan Dengan CSS Pribadi -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/style_admin.css">
    <!-- Chart.js  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/helpers.esm.min.js">

</head>

<body class="hold-transition sidebar-mini">

    <?= $this->include('layout/sidebar'); ?>
    <?= $this->renderSection('content'); ?>

    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    <footer class="main-footer text-center">
        <!-- Default to the left -->
        <strong>Copyright &copy; <?= date('Y'); ?>.</strong><?= user()->username; ?>.
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>
    <script>
        function previewImg() {

            const gambar = document.querySelector('#gambar');
            const gambarLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            gambarLabel.textContent = gambar.files[0].name;

            const fileGambar = new FileReader();
            fileGambar.readAsDataURL(gambar.files[0]);

            fileGambar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        function nilai1(value) {
            document.querySelector('#nilai1').value = value;
        }

        function nilai2(value) {
            document.querySelector('#nilai2').value = value;
        }

        function nilai3(value) {
            document.querySelector('#nilai3').value = value;
        }

        function nilai4(value) {
            document.querySelector('#nilai4').value = value;
        }

        function nilai5(value) {
            document.querySelector('#nilai5').value = value;
        }

        function nilai6(value) {
            document.querySelector('#nilai6').value = value;
        }

        function nilai7(value) {
            document.querySelector('#nilai7').value = value;
        }

        function nilai8(value) {
            document.querySelector('#nilai8').value = value;
        }

        function nilai9(value) {
            document.querySelector('#nilai9').value = value;
        }

        function nilai10(value) {
            document.querySelector('#nilai10').value = value;
        }

        function nilai11(value) {
            document.querySelector('#nilai11').value = value;
        }
    </script>
</body>

</html>