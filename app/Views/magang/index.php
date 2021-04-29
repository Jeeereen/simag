<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/magang/create" class="btn m-3 "><i class="bi bi-person-plus"></i></a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped " id="dtBasicExample">
                <thead>
                    <tr>
                        <th scope="col" class="th-sm"></th>
                        <th scope="col" class="th-sm">NIK</th>
                        <?php if (in_groups('superadmin')) : ?>
                            <th scope="col" class="th-sm">Dinas Bagian</th>
                        <?php elseif (in_groups('user')) : ?>
                            <th scope="col" class="th-sm">Jurusan</th>
                        <?php endif; ?>
                        <th scope="col" class="th-sm">Nama</th>
                        <th scope="col">Gambar</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($magang as $m) : ?>
                        <?php if (in_groups('user')) : ?>
                            <?php if ($m['dinas'] == user()->fullname) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $m['nik']; ?></td>
                                    <td><?= $m['jurusan']; ?></td>
                                    <td><?= $m['nama']; ?></td>
                                    <td><img src="/img/<?= $m['gambar']; ?>" class="gambar" alt=""></td>
                                    <td><a href="/magang/<?= $m['magang_id']; ?>" class="btn btn-success">Detail</a></td>
                                </tr>
                            <?php endif; ?>
                        <?php else : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $m['nik']; ?></td>
                                <td><?= $m['dinas']; ?></td>
                                <td><?= $m['nama']; ?></td>
                                <td><img src="/img/<?= $m['gambar']; ?>" class="gambar" alt=""></td>
                                <td><a href="/magang/<?= $m['magang_id']; ?>" class="btn btn-success">Detail</a></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>