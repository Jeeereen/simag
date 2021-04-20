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
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Menghubungkan Dengan CSS Pribadi -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

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
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; <?= date('Y'); ?> <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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

        function nilai1(range1) {
            document.querySelector('#nilai1').value = range1;
        }

        function nilai2(range1) {
            document.querySelector('#nilai2').value = range1;
        }

        function nilai3(range1) {
            document.querySelector('#nilai3').value = range1;
        }

        function nilai4(range1) {
            document.querySelector('#nilai4').value = range1;
        }

        function nilai5(range1) {
            document.querySelector('#nilai5').value = range1;
        }

        function nilai6(range1) {
            document.querySelector('#nilai6').value = range1;
        }

        function nilai7(range1) {
            document.querySelector('#nilai7').value = range1;
        }

        function nilai8(range1) {
            document.querySelector('#nilai8').value = range1;
        }

        function nilai9(range1) {
            document.querySelector('#nilai9').value = range1;
        }

        function nilai10(range1) {
            document.querySelector('#nilai10').value = range1;
        }

        function nilai11(range1) {
            document.querySelector('#nilai11').value = range1;
        }
    </script>
</body>

</html>