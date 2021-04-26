<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col-6 ">
        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan pencarian" name="keyword">
                <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col">
            <a href="/magang/create" class="btn btn-primary m-3">Tambah Data Magang</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">NIK</th>
                        <?php if (in_groups('superadmin')) : ?>
                            <th scope="col">Dinas Bagian</th>
                        <?php endif; ?>
                        <th scope="col">Nama</th>
                        <th scope="col">Gambar</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($magang as $m) : ?>
                        <?php if (in_groups('user')) : ?>
                            <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                            <?php if ($m['dinas'] == user()->fullname) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $m['nik']; ?></td>
                                    <td><?= $m['nama']; ?></td>
                                    <td><img src="/img/<?= $m['gambar']; ?>" class="gambar" alt=""></td>
                                    <td><a href="/magang/<?= $m['magang_id']; ?>" class="btn btn-info">Detail</a></td>
                                </tr>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $m['nik']; ?></td>
                                <td><?= $m['dinas']; ?></td>
                                <td><?= $m['nama']; ?></td>
                                <td><img src="/img/<?= $m['gambar']; ?>" class="gambar" alt=""></td>
                                <td><a href="/magang/<?= $m['magang_id']; ?>" class="btn btn-info">Detail</a></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('magang', 'magang_pagination'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>