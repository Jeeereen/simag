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
                        <div class="card-body">
                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <h5 class="card-title"><b><?= user()->fullname; ?></b></h5>
                            <p class="card-text mt-5"><b>Email : </b> <?= user()->email; ?></p>
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