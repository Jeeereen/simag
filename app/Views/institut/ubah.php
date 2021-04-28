<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php $jenisinstitut = $institutedit['jenispendidikan']; ?>
<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <form action="/institut/update/<?= $institutedit['id']; ?>" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= $institutedit['nama']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Sekolah</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $institutedit['alamat']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak Sekolah <small class="text-muted">(Optional)</small></label>
                            <input type="text" class="form-control" id="kontak" name="kontak" value="<?= $institutedit['kontak']; ?>">
                        </div>
                        <input type="hidden" class="form-control" id="jenispendidikan" name="jenispendidikan" value="<?= $institutedit['jenispendidikan']; ?>">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
                                <?php if ($i['jenispendidikan'] == $jenisinstitut) : ?>
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
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data <?= $i['nama']; ?>')">Delete</button>
                                                <a href="/institut/ubah/<?= $i['id']; ?>" class="btn btn-warning">Edit</a>
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