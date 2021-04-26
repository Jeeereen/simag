<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="/magang/save" method="post" class="mt-5" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <?php if (in_groups('user')) : ?>
                    <fieldset disabled>
                        <div class="row mb-3">
                            <label for="hidden" class="col-sm-2 col-form-label">Bagian</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control " id="hidden" value="<?= user()->fullname; ?>" name="hidden">

                            </div>
                        </div>
                    </fieldset>
                    <input type="hidden" name="dinas" value="<?= user()->fullname; ?>">
                <?php else :  ?>
                    <div class="row mb-3">
                        <label class="input-group-text" for="dinas">Daftar Nama Dinas <i class="bi bi-arrow-right ml-2"></i></label>
                        <select class="form-select <?= ($validation->hasError('dinas')) ? 'is-invalid' : ''; ?>" id="dinas" name="dinas">
                            <option selected>Pilih Dinas...</option>
                            <?php foreach ($dinas as $d) : ?>
                                <option value="<?= $d->fullname; ?>"><?= $d->fullname; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= $validation->getError('dinas'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="mb-3 row">
                    <label for="" class="col-sm-4 col-form-label">Periode Magang</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <small class="text-muted">Dari..</small>
                            <input type="date" class="form-control <?= ($validation->hasError('magangmasuk')) ? 'is-invalid' : ''; ?>" name="magangmasuk">
                            <div class="invalid-feedback">
                                <?= $validation->getError('magangmasuk'); ?>
                            </div>
                            <small class="text-muted">Hingga..</small>
                            <input type="date" class="form-control <?= ($validation->hasError('magangkeluar')) ? 'is-invalid' : ''; ?>" name="magangkeluar">
                            <div class="invalid-feedback">
                                <?= $validation->getError('magangkeluar'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" value="<?= old('nik'); ?>" name="nik">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nik'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/default.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label for="gambar" class="custom-file-label">Pilih Gambar..</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ttl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="ttl" value="<?= old('ttl'); ?>" name="ttl">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" value="<?= old('email'); ?>" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki">
                            <label class="form-check-label" for="jeniskelamin">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan">
                            <label class="form-check-label" for="jeniskelamin">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" value="<?= old('alamat'); ?>" name="alamat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="notp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="notp" value="<?= old('notp'); ?>" name="notp" placeholder="08**********">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="agama">Daftar Nama Agama <i class="bi bi-arrow-right ml-2"></i></label>
                            <select class="form-select" id="agama" name="agama">
                                <option selected>Pilih Agama...</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="institut_id" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="institut_id">Daftar Nama Sekolah/Universitas <i class="bi bi-arrow-right ml-2"></i></label>
                            <select class="form-select  <?= ($validation->hasError('institut_id')) ? 'is-invalid' : ''; ?>" id="institut_id" name="institut_id">
                                <option value="<?= (old('institut_id')) ? old('institut_id') : '0'; ?>" selected><?= (old('nama')) ? old('nama') : 'Pilih Sekolah/Universitas...'; ?></option><small></small>
                                <?php foreach ($institut as $i) : ?>
                                    <option value="<?= $i['institut_id']; ?>"><?= $i['nama ']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('institut_id'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan" value="<?= old('jurusan'); ?>" name="jurusan">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Magang</button>
                <br><br> <a href="/magang">Kembali ke daftar magang.</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>