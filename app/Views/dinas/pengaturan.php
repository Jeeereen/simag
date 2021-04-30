<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/dinas/pengaturan">Profil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="row g-0">
                    <input type="hidden" name="oldImage" value="<?= user()->user_image; ?>">
                    <div class="col-md-4">
                        <img for="user_image" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="..." class="card-img img-thumbnail logo-preview">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <?php if (session()->getFlashdata('pesan')) : ?>
                                <div class="alert alert-info" role="alert">
                                    <?= session()->getFlashdata('pesan'); ?>
                                </div>
                            <?php endif; ?>
                            <h5 class="card-title"><b><?= user()->fullname; ?></b></h5>
                            <form action="/dinas/update/<?= user()->id; ?>" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="<?= ($validation->hasError('logo')) ? 'is-invalid' : ''; ?>" id="logo" name="logo" onchange="previewLogo()">
                                            <label for="logo" class="custom-logo-label"><?= user()->user_image; ?></label>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('logo'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Upload Gambar</button>
                            </form>
                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <p class="card-text mt-3"><b>Email : </b> <?= user()->email; ?></p>
                            <p class="card-text"><b>Username : </b> <?= user()->username; ?></p>
                            <form action="<?= route_to('forgot') ?>" method="post">
                                <?= csrf_field() ?>
                                <input type="hidden" name="email" value="<?= user()->email; ?>">
                                <button type="submit" class="btn btn-danger">Reset Password?</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>