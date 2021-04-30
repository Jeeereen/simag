<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: auto;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/magang/<?= $magang['magang_id']; ?>">Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/nilai/hasil/<?= $magang['magang_id']; ?>">Hasil Penilaian</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="row">
                    <div class="card-body">
                        <?php if ($nilai == true) : ?>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                <a class="btn btn-info me-md-2" href="/nilai/ubah/<?= $nilai['nilai_id']; ?>">Ubah Penilaian</a>
                            </div>
                            <table class="table table-striped ">
                                <tr>
                                    <td class="py-5">
                                        <b><?= $magang['nama']; ?></b><br>
                                        <small>NIK : <?= $magang['nik']; ?></small>
                                    </td>
                                    <td>
                                        <b>Supervisor Penilai</b><br>
                                        <?= $nilai['penilai']; ?>
                                    </td>
                                    <td>
                                        <b>Periode Magang</b><br>
                                        <?= $magang['magangmasuk']; ?><b> s/d </b><?= $magang['magangkeluar']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Aspek Penilaian</th>
                                                <th scope="col">Nilai Perolehan</th>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Kerajinan/Ketekunan</td>
                                                <td><?= $nilai['kerajinan']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Daya Tangkap Terhadap Tugas</td>
                                                <td><?= $nilai['dayatangkap']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Kemampuan Menyelesaikan Tugas</td>
                                                <td><?= $nilai['kemampuan']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Tanggung Jawab Terhadap Tugas</td>
                                                <td><?= $nilai['tanggungjawab']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Hubungan Terhadap Karyawan</td>
                                                <td><?= $nilai['hubungan']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Akhlak/Kelakuan</td>
                                                <td><?= $nilai['akhlak']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Kepercayaan terhadap Diri Sendiri</td>
                                                <td><?= $nilai['percayadiri']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Keterampilan Dalam Menggunakan Peralatan</td>
                                                <td><?= $nilai['keterampilan']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">9</th>
                                                <td>Keselamatan Kerja</td>
                                                <td><?= $nilai['keselamatan']; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">10</th>
                                                <td>Kemampuan Dalam Mengambil Keputusan</td>
                                                <td><?= $nilai['kemampuan']; ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Nilai Keseluruhan</th>
                                                <td><?= $nilai['keseluruhan']; ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        <?php else : ?>
                            <h3 class="card-title"><?= $magang['nama']; ?> belum mendapatkan penilaian</h3> <br><br>
                            <p class="card-subtitle">Silahkan melakukan penilaian di bagian penilaian.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>