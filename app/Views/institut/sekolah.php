<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <form action="/institut/save" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Sekolah</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak Sekolah <small class="text-muted">(Optional)</small></label>
                            <input type="text" class="form-control" id="kontak" name="kontak">
                        </div>
                        <input type="hidden" class="form-control" id="jenispendidikan" name="jenispendidikan" value="Sekolah">
                        <button type="submit" class="btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="dtBasicExample">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Sekolah</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $a = 1; ?>
                            <?php foreach ($institut as $i) : ?>
                                <?php if ($i['jenispendidikan'] == 'Sekolah') : ?>
                                    <tr>
                                        <th><?= $a++; ?></th>
                                        <td><?= $i['nama']; ?></td>
                                        <td>
                                            <div class="row"><?= $i['alamat']; ?></div>
                                            <div class="row"><?= $i['kontak']; ?></div>
                                        </td>
                                        <td>
                                            <form action="/institut/<?= $i['id']; ?>" method="POST" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" value="Sekolah" name="jenispendidikan">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data <?= $i['nama']; ?>')"><i class="bi bi-trash"></i></button>
                                                <a href="/institut/ubah/<?= $i['id']; ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>