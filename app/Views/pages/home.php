<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <div class="info-box-content">
                    <span class="info-box-text">Total Magang Keseluruhan</span>
                    <span class="info-box-number"><?= $totalmagang; ?> Orang</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <div class="info-box-content">
                    <span class="info-box-text">Total Magang Bulan Ini</span>
                    <span class="info-box-number"><?= $bulanini; ?> Orang</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <div class="info-box-content">
                    <span class="info-box-text">Terdapat</span>
                    <span class="info-box-number"><?= $lakilaki; ?> Laki-laki & <?= $perempuan; ?> Perempuan</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <div class="info-box-content">
                    <span class="info-box-text">Jenis Pendidikan</span>
                    <span class="info-box-number"><?= $universitas; ?> Universitas & <?= $sekolah; ?> Sekolah</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <canvas id="jumlahMagang"></canvas>
        </div>
        <div class="col-lg-6">
            <canvas id="jenisKelamin"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <canvas id="jenisPendidikan"></canvas>
        </div>
        <div class="col-lg-6">
            <div class="card-body">
                <p class="text-center">
                    <strong>Daftar Universitas</strong>
                </p>

                <div class="progress-group">
                    Add Products to Cart
                    <span class="float-right"><b>160</b>/200</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->

                <div class="progress-group">
                    Complete Purchase
                    <span class="float-right"><b>310</b>/400</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                    </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                    <span class="progress-text">Visit Premium Page</span>
                    <span class="float-right"><b>480</b>/800</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                    Send Inquiries
                    <span class="float-right"><b>250</b>/500</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
            </div>
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
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
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
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
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
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
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
</script>
<?= $this->endSection(); ?>