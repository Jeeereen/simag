<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col-6 ">
        <form action="" method="post">
            <!-- <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan pencarian" name="keyword">
                <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
            </div> -->
        </form>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
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
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $d->username; ?></td>
                            <td><?= $d->fullname; ?></td>
                            <td><img src="/img/dinas/<?= $d->user_image; ?>" class="logo" alt=""></td>
                            <td><a href="" class="btn btn-info">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>