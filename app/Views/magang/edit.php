<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="/magang/update/<?= $magang['magang_id']; ?>" method="post" class="mt-5" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="gambarLama" value="<?= $magang['gambar']; ?>">
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= (old('nama')) ? old('nama') : $magang['nama']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" value="<?= (old('nik')) ? old('nik') : $magang['nik']; ?>" name="nik">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nik'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $magang['gambar']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label for="gambar" class="custom-file-label"><?= $magang['gambar']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ttl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="ttl" value="<?= (old('ttl')) ? old('ttl') : $magang['ttl']; ?>" name="ttl">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" value="<?= (old('email')) ? old('email') : $magang['email']; ?>" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jeniskelamin" value="<?= (old('jeniskelamin')) ? old('jeniskelamin') : $magang['jeniskelamin']; ?>" name="jeniskelamin">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" value="<?= (old('alamat')) ? old('alamat') : $magang['alamat']; ?>" name="alamat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="notp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="notp" value="<?= (old('notp')) ? old('notp') : $magang['notp']; ?>" name="notp" placeholder="08**********">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <input type="select" class="form-control" id="agama" value="<?= (old('agama')) ? old('agama') : $magang['agama']; ?>" name="agama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan" value="<?= (old('jurusan')) ? old('jurusan') : $magang['jurusan']; ?>" name="jurusan">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data Magang</button>
                <br><br> <a href="/magang">Kembali ke daftar magang.</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>