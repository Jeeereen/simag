<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <form action="/institut/save" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Universitas</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="jenispendidikan" name="jenispendidikan" value="Universitas">
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
                    <table class="table table-striped">
                        <tr>
                            <th></th>
                            <th>Nama Universitas</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $a = 1; ?>
                        <?php foreach ($institut as $i) : ?>
                            <?php if ($i['jenispendidikan'] == 'Universitas') : ?>
                                <tr>
                                    <th><?= $a++; ?></th>
                                    <td><?= $i['nama']; ?></td>
                                    <td>
                                        <form action="/institut/<?= $i['institut_id']; ?>" method="POST" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" value="Universitas" name="jenispendidikan">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data <?= $i['nama']; ?>')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>