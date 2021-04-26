<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="/nilai/update/<?= $nilai['nilai_id']; ?>" method="post">
                <div class="mb-3 row">
                    <label class="col-sm-4 col-form-label">Nama Magang</label>
                    <div class="col-sm 8">
                        <label class="col-sm-4 col-form-label"><?= $magang['nama']; ?></label>
                        <input type="hidden" name="magang_id" value="<?= $magang['magang_id']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-4 col-form-label">Periode Magang</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="date" class="form-control" name="magangmasuk" value="<?= $nilai['magangmasuk']; ?>">
                            <input type="date" class="form-control" name="magangkeluar" value="<?= $nilai['magangkeluar']; ?>">
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
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Nama Penilai</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="penilai" name="penilai" value="<?= $nilai['penilai']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-4 col-form-label">Value Nilai</label>
                    <div class="col-sm-8">
                        <div class="row">

                            <div class="col">
                                0
                            </div>
                            <div class="col">
                                1
                            </div>
                            <div class="col">
                                2
                            </div>
                            <div class="col">
                                3
                            </div>
                            <div class="col">
                                4
                            </div>
                            <div class="col">
                                5
                            </div>
                            <div class="col">
                                6
                            </div>
                            <div class="col">
                                7
                            </div>
                            <div class="col">
                                8
                            </div>
                            <div class="col">
                                9
                            </div>
                            <div class="col">
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kerajinan" class="col-sm-4 col-form-label">Kerajinan / Ketekunan</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['kerajinan']; ?>" id="kerajinan" oninput="nilai1(value)" name="kerajinan">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="range2" class="col-sm-4 col-form-label">Daya Tangkap Terhadap Tugas</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['dayatangkap']; ?>" id="range2" oninput="nilai2(value)" name="dayatangkap">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="range3" class="col-sm-4 col-form-label">Kemampuan Menyelesaikan Tugas</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['kemampuan']; ?>" id="range3" oninput="nilai3(value)" name="kemampuan">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Tanggung Jawab Terhadap Tugas</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['kemampuan']; ?>" id="range4" oninput="nilai4(value)" name="tanggungjawab">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Hubungan Terhadap Karyawan</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['hubungan']; ?>" id="range5" oninput="nilai5(value)" name="hubungan">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Akhlak / Kelakuan</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['akhlak']; ?>" id="range6" oninput="nilai6(value)" name="akhlak">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Kepercayaan Terhadap Diri Sendiri</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['percayadiri']; ?>" id="range7" oninput="nilai7(value)" name="percayadiri">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Keterampilan Dalam Menggunakan Peralatan</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['keterampilan']; ?>" id="range8" oninput="nilai8(value)" name="keterampilan">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Keselamatan Kerja</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['keselamatan']; ?>" id="range9" oninput="nilai9(value)" name="keselamatan">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Kemampuan Dalam Mengambil Keputusan</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['keputusan']; ?>" id="range10" oninput="nilai10(value)" name="keputusan">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Penilaian Secara Umum</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="range" class="custom-range" min="0" max="10" value="<?= $nilai['keseluruhan']; ?>" id="range11" oninput="nilai11(value)" name="keseluruhan">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-4">Masukkan Nilai</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>