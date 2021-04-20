<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="" method="post">
                <div class="mb-3 row">
                    <label for="" class="col-sm-4 col-form-label">Periode Magang</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="date" class="form-control" name="magangmasuk">
                            <input type="date" class="form-control" name="magangkeluar">
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
                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" value="" name="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Nama Penilai</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="penilai" name="penilai">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="range1" class="col-sm-4 col-form-label">Kerajinan / Ketekunan</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range1" oninput="nilai1(value)" name="kerajinan">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range1" id="nilai1">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="range2" class="col-sm-4 col-form-label">Daya Tangkap Terhadap Tugas</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range2" oninput="nilai2(value)" name="dayatangkap">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range2" id="nilai2">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="range3" class="col-sm-4 col-form-label">Kemampuan Menyelesaikan Tugas</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range3" oninput="nilai3(value)" name="kemampuan">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range3" id="nilai3">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Tanggung Jawab Terhadap Tugas</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range4" oninput="nilai4(value)" name="tanggungjawab">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range4" id="nilai4">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Hubungan Terhadap Karyawan</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range5" oninput="nilai5(value)" name="hubungan">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range5" id="nilai5">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Akhlak / Kelakuan</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range6" oninput="nilai6(value)" name="akhlak">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range6" id="nilai6">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Kepercayaan Terhadap Diri Sendiri</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range7" oninput="nilai7(value)" name="percayadiri">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range7" id="nilai7">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Keterampilan Dalam Menggunakan Peralatan</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range8" oninput="nilai8(value)" name="keterampilan">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range8" id="nilai8">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Keselamatan Kerja</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range9" oninput="nilai9(value)" name="keselamatan">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range9" id="nilai9">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Kemampuan Dalam Mengambil Keputusan</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range10" oninput="nilai10(value)" name="keputusan">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range10" id="nilai10">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penilai" class="col-sm-4 col-form-label">Penilaian Secara Umum</label>
                    <div class="col-sm-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <input type="range" class="custom-range" min="0" max="10" value="5" id="range11" oninput="nilai11(value)" name="keseluruhan">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <output class="ml-2" for="range11" id="nilai11">5</output>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <button type="submit" class="btn btn-primary">Masukkan Nilai</button>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?= $this->endSection(); ?>