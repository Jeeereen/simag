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
                    <div class="col-md-4">
                        <img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="..." class="card-img">
                    </div>
                    <div class="col-md-8">
                        <form action="<?= route_to('reset-password') ?>" method="post">
                            <?= csrf_field() ?>

                            <input type="hidden" name="token" value="<?= ($dinas['reset_hash']) ? $dinas['reset_hash'] : user()->reset_hash; ?>">

                            <input type="hidden" name="email" value="<?= ($dinas['email']) ? $dinas['email'] : user()->email; ?>">

                            <input type="hidden" name="username" value="<?= ($dinas['username']) ? $dinas['username'] : user()->username; ?>">

                            <div class="form-group">
                                <label for="password"><?= lang('Auth.newPassword') ?></label>
                                <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password">
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pass_confirm"><?= lang('Auth.newPasswordRepeat') ?></label>
                                <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm">
                                <div class="invalid-feedback">
                                    <?= session('errors.pass_confirm') ?>
                                </div>
                            </div>

                            <br>

                            <button type="submit" class="btn btn-success d-inline"><?= lang('Auth.resetPassword') ?></button>
                            <a href="/dinas/<?= ($dinas['username']) ? 'dinas/' . $dinas['username'] : 'pengaturan/' . user()->username; ?>" class="btn btn-warning my-3">Kembali ke Profil</a>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>