<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="/magang/update/<?= $magang['magang_id']; ?>" method="post" class="mt-5" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <?php if (in_groups('user')) : ?>
                    <fieldset disabled>
                        <div class="row mb-3">
                            <label for="hidden" class="col-sm-2 col-form-label">Bagian</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="hidden" value="<?= user()->fullname; ?>" name="hidden">

                            </div>
                        </div>
                    </fieldset>
                    <input type="hidden" name="dinas" value="<?= user()->fullname; ?>">
                <?php else :  ?>
                    <div class="row mb-3">
                        <label class="input-group-text" for="dinas">Daftar Nama Dinas <i class="bi bi-arrow-right ml-2"></i></label>
                        <select class="form-select" id="dinas" name="dinas">
                            <option value="<?= (old('dinas')) ? old('dinas') : $magang['dinas']; ?>" selected><?= (old('dinas')) ? old('dinas') : $magang['dinas']; ?></option>
                            <?php foreach ($dinas as $d) : ?>
                                <option value="<?= $d->fullname; ?>"><?= $d->fullname; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endif; ?>
                <input type="hidden" name="gambarLama" value="<?= $magang['gambar']; ?>">
                <div class="mb-3 row">
                    <label for="" class="col-sm-4 col-form-label">Periode Magang</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="date" class="form-control" id="magangmasuk" value="<?= (old('magangmasuk')) ? old('magangmasuk') : $magang['magangmasuk']; ?>" name="magangmasuk">
                            <input type="date" class="form-control" id="magangkeluar" value="<?= (old('magangkeluar')) ? old('magangkeluar') : $magang['magangkeluar']; ?>" name="magangkeluar">
                        </div>
                        <div class=" container">
                            <div class="row">
                                <div class="col">
                                    <small class="text-muted">Dari..</small>
                                </div>
                                <div class="col">
                                    <small class="text-muted">Hingga..</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="agama">Daftar Nama Agama <i class="bi bi-arrow-right ml-2"></i></label>
                            <select class="form-select" id="agama" name="agama">
                                <option selected>Pilih Agama...</option>
                                <option value="Islam" <?= ($magang['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                                <option value="Protestan" <?= ($magang['agama'] == 'Protestan') ? 'selected' : ''; ?>>Protestan</option>
                                <option value="Katolik" <?= ($magang['agama'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                                <option value="Hindu" <?= ($magang['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                                <option value="Buddha" <?= ($magang['agama'] == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
                                <option value="Khonghucu" <?= ($magang['agama'] == 'Khonghucu') ? 'selected' : ''; ?>>Khonghucu</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="institut" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="institut">Daftar Nama Sekolah/Universitas <i class="bi bi-arrow-right ml-2"></i></label>
                            <select class="form-select" id="institut" name="institut">
                                <option value="<?= (old('nama')) ? old('nama') : $oldinstitut['nama']; ?>" selected><?= (old('nama')) ? old('nama') : $oldinstitut['nama']; ?></option><small></small>
                                <?php foreach ($institut as $i) : ?>
                                    <option value="<?= $i['nama']; ?>"><?= $i['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan" value="<?= (old('jurusan')) ? old('jurusan') : $magang['jurusan']; ?>" name="jurusan">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Ubah Data Magang</button>
                <br><br> <a href="/magang">Kembali ke daftar magang.</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>