<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: auto;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/magang/<?= $magang['magang_id']; ?>">Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/nilai/hasil/<?= $magang['magang_id']; ?>">Hasil Penilaian</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $magang['gambar']; ?>" alt=" ..." class="card-img m-2">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title mb-2"><?= $magang['nama']; ?></h5>
                            <p class="card-text"><b>Periode Magang</b> : <?= $magang['magangmasuk']; ?> s/d <?= $magang['magangkeluar']; ?></p>
                            <p class="card-text"><b>Dinas</b> : <?= $magang['dinas']; ?></p>
                            <p class="card-text"><b>NIK</b> : <?= $magang['nik']; ?></p>
                            <?php if ($institut['jenispendidikan'] == true) : ?>
                                <p class="card-text"><b><?= ($institut['jenispendidikan'] == 'Sekolah') ? 'Sekolah' : 'Universitas'; ?></b> : <?= $institut['nama']; ?></p>
                            <?php endif; ?>
                            <p class="card-text"><b>Jurusan</b> : <?= $magang['jurusan']; ?></p>
                            <p class="card-text"><b>Email</b> : <?= $magang['email']; ?></p>
                            <p class="card-text"><b>Tanggal Lahir</b> : <?= $magang['ttl']; ?></p>
                            <p class="card-text"><b>Jenis Kelamin</b> : <?= $magang['jeniskelamin']; ?></p>
                            <p class="card-text"><b>Alamat</b> : <?= $magang['alamat']; ?></p>
                            <p class="card-text"><b>Nomor Telepon</b> : <?= $magang['notp']; ?></p>
                            <p class="card-text"><b>Agama</b> : <?= $magang['agama']; ?></p>

                            <a href="/magang/edit/<?= $magang['magang_id']; ?>" class="btn btn-warning">Edit</a>

                            <form action="/magang/<?= $magang['magang_id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data <?= $magang['nama']; ?>')">Delete</button>
                            </form>

                            <br><br>
                            <a href="/magang">Kembali ke daftar magang.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>