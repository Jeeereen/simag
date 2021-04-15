<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <h1 class="mt-2 ml-2"><?= $title; ?></h1>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="bi bi-person-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <img src="/img/user2-160x160.jpg" class="img-circle mr-2" style="width: 75px;" alt="User Image">
                        <span class="float-right">Admin Dinas</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-person-check mr-2"></i>Pengaturan Akun
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="/logout" class="dropdown-item">
                        <i class="bi bi-box-arrow-left mr-2"></i>Keluar
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="<?= base_url() ?>/img/gowa.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">SIM Magang</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="img/gowa.png" class="img-circle elevation-2" alt="Gambar">
                </div>
                <div class="info">
                    <a href="" class="d-block">Dinas</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/pages" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-list-ul"></i>
                            <p>
                                Daftar Data
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/magang" class="nav-link">
                                    <i class="nav-icon bi bi-person-lines-fill"></i>
                                    <p>
                                        Data Magang
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dinas" class="nav-link">
                                    <i class="nav-icon bi bi-person-lines-fill"></i>
                                    <p>
                                        Data Dinas
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/pages/penilaian" class="nav-link">
                            <i class="nav-icon bi bi-file-earmark-bar-graph"></i>
                            <p>
                                Penilaian Magang
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-gear"></i>
                            <p>
                                Pengaturan
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">