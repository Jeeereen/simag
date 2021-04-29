<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <div class="info-box-content">
                    <span class="info-box-text text-center mb-3 fw-bolder">Total Magang Keseluruhan</span>
                    <span class="info-box-number text-center"><?= $totalmagang; ?> Orang</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <div class="info-box-content">
                    <span class="info-box-text text-center mb-3">Total Magang Bulan Ini</span>
                    <span class="info-box-number text-center"><?= $bulanini; ?> Orang</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <div class="info-box-content">
                    <span class="info-box-text text-center mb-3">Terdapat</span>
                    <span class="info-box-number text-center"><?= $lakilaki; ?> Laki-laki dan <?= $perempuan; ?> Perempuan</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
             <div class="info-box">
                <div class="info-box-content">
                    <span class="info-box-text text-center mb-3">Jenis Pendidikan </span>
                    <span class="info-box-number text-center"><?= $universitas; ?> Universitas dan <?= $sekolah; ?> Sekolah</span>
                </div>
            </div>
        </div>
    </div>
    


    <div class="row">
        <div class="col-lg-6 mt-5 mb-3">
            <canvas id="jumlahMagang"></canvas>
        </div>
        <div class="col-lg-6 mt-5 mb-3">
            <canvas id="jenisKelamin"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-5 mb-5">
            <canvas id="jenisPendidikan"></canvas>
        </div>
        <div class="col-lg-6 mt-5 mb-5">
            <canvas id="jurusan"></canvas>
        </div>
    </div>
</div>
<script>
    let jumlahMagang = document.getElementById('jumlahMagang').getContext('2d');

    let magangChart = new Chart(jumlahMagang, {
        type: 'horizontalBar', //bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            labels: ['Total Magang Keseluruhan', 'Total Magang Bulan Ini'],
            datasets: [{
                label: 'Magang',
                data: [
                    <?= $totalmagang; ?>,
                    <?= $bulanini; ?>,
                ],
                backgroundColor: [
                    'rgba(88, 212, 138, 0.8)',
                    'rgba(70, 172, 32, 1)',
                ],
                borderColor: [
                    'rgba(88, 212, 138, 0.8)',
                    'rgba(70, 172, 32, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Total Magang',
                fontSize: 25
            },
            legend: {
                position: 'top'
            },
            scales: {
                yAxes: [{
                    barPercentage: 0.5,
                    gridLines: {
                        display: false
                    }
                }],
                xAxes: [{
                    gridLines: {
                        zeroLineColor: "black",
                        zeroLineWidth: 2
                    },
                    ticks: {
                        min: 0,
                        stepSize: 1
                    },
                }]
            },
        }
    });

    var ctx = document.getElementById('jenisKelamin').getContext('2d');
    var jenisKelamin = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Magang Laki-laki', 'Magang Perempuan'],
            datasets: [{
                label: 'Magang',
                data: [<?= $lakilaki; ?>, <?= $perempuan; ?>],
                backgroundColor: [
                    'rgba(75, 106, 104, 0.7)',
                    'rgba(255, 99, 71, 0.4)'
                ],
                borderColor: [
                    'rgba(75, 113, 102, 0.7)',
                    'rgba(255, 99, 71, 0.6)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Magang berdasarkan Jenis Kelamin',
                fontSize: 25
            },
            legend: {
                position: 'top'
            },
            scales: {
                xAxes: [{
                    barPercentage: 0.5,
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        zeroLineColor: "black",
                        zeroLineWidth: 2
                    },
                    ticks: {
                        min: 0,
                        stepSize: 1
                    },
                }]
            },
        }
    });

    var pendidikan = document.getElementById('jenisPendidikan').getContext('2d');
    var jenisPendidikan = new Chart(pendidikan, {
        type: 'pie',
        data: {
            labels: ['Magang dari Universitas', 'Magang dari Sekolah'],
            datasets: [{
                label: 'Magang',
                data: [<?= $universitas; ?>, <?= $sekolah; ?>],
                backgroundColor: [
                    'rgba(52, 192, 156, 0.7)',
                    'rgba(75, 93, 72, 0.6)'
                ],
                borderColor: [
                    'rgba(52, 192, 156, 0.9)',
                    'rgba(75, 93, 72, 0.7)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Jenis Pendidikan Magang',
                fontSize: 25
            },
            legend: {
                position: 'top'
            }
        }
    });

    var jurusannya = document.getElementById('jurusan').getContext('2d');
    var jurusan = new Chart(jurusannya, {
        type: 'bar',
        data: {
            labels: [
                <?php foreach ($jurusan as $j) : ?> '<?= $j['jurusan']; ?>',
                <?php endforeach; ?>
            ],
            datasets: [{
                label: 'Jurusan',
                data: [
                    <?php foreach ($jurusan as $j) : ?> '<?= $j['COUNT(jurusan)']; ?>',
                    <?php endforeach; ?>
                ],
                backgroundColor: [
                    'rgba(151, 174, 63, 0.7)',
                    'rgba(151, 230, 170, 0.9)'
                ],
                borderColor: [
                    'rgba(151, 174, 63, 0.9)',
                    'rgba(151, 230, 170, 0.9)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Jurusan ',
                fontSize: 25
            },
            legend: {
                position: 'top'
            },
            scales: {
                xAxes: [{
                    barPercentage: 0.5,
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        zeroLineColor: "black",
                        zeroLineWidth: 2
                    },
                    ticks: {
                        min: 0,
                        stepSize: 1
                    },
                }]
            },
        }
    });
</script>
<?= $this->endSection(); ?>