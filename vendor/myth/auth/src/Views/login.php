<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-xl-6">


			<div class="img">

				<img class="wave" src="<?= base_url(); ?>/asset/img/wave.svg">

				<img class="img2-svg" src="<?= base_url(); ?>/asset/img/img2.svg">
			</div>
		</div>

		<!-- Outer Row -->



		<div class="col-md-12 col-md-12 col-xl-6">
			<div class="login-container">

				<form action="<?= route_to('login') ?>" class="col-sm-10" method="post">
					<?= csrf_field() ?>
					<div class="text-center">
						<h2>Selamat Datang</h2>
						<img class="lambang-gowa" src="<?= base_url(); ?>/asset/img/lambang.png" alt="gowa" width="20%">
					</div>
					<?= view('Myth\Auth\Views\_message_block') ?>
					<?php if ($config->validFields === ['email']) : ?>
						<div class="input-div one">
							<div class="i">
								<i class="bi bi-envelope-fill"></i>
							</div>
							<div>
								<h5>Masukkan Email</h5>
								<input class="input <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" type="email" name="login">
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							</div>
						</div>

					<?php else : ?>
						<div class="input-div one">
							<div class="i">
								<i class="bi bi-envelope-fill"></i>
							</div>
							<div>
								<h5>Masukkan Email</h5>
								<input class="input  <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" type="text" name="login">
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="input-div two">
						<div class="i">
							<i class="bi bi-file-earmark-lock2-fill"></i>
						</div>
						<div>
							<h5>Masukkan Password</h5>
							<input class="input <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password">
							<div class=" invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>
					</div>

					<br>

					<button type="submit" class="btn-login"><?= lang('Auth.loginAction') ?></button>
				</form>
			</div>
			<?php if ($config->allowRegistration) : ?>
				<p><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
			<?php endif; ?>
		</div>

	</div>
</div>

<?= $this->endSection() ?>