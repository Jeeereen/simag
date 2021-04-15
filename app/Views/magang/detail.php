<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: auto;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $magang['gambar']; ?>" alt=" ..." class="card-img m-2">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $magang['nama']; ?></h5>
                            <p class="card-text"><b>NIK</b> : <?= $magang['nik']; ?></p>
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