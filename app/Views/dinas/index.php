<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/dinas/tambah" class="btn btn-success"><i class="bi bi-person-plus"></i></a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped " id="dtBasicExample">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama Dinas</th>
                        <th scope="col">Logo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dinas as $d) : ?>
                        <?php if ($d->id > 1) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $d->username; ?></td>
                                <td><?= $d->fullname; ?></td>
                                <td><img src="<?= base_url(); ?>/img/<?= $d->user_image; ?>" class="gambar" alt=""></td>
                                <td>
                                    <a href="/dinas/ubah/<?= $d->username; ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                    <a href="/dinas/hapus/<?= $d->id; ?>" class="btn btn-danger "><i class="bi bi-trash"></i></i></a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>