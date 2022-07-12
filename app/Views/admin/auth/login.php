<?= $this->extend('admin/layouts/base.php'); ?>
<?= $this->section('content'); ?>
<section class="login-content">
	<div class="row m-0 bg-white vh-100">
		<div class="col-md-5">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
						<div class="card-body">
							<div class="mb-5">
								<a href="<?= base_url(); ?>" class="navbar-brand d-flex align-items-center mb-3">
									<?= $this->include('admin/include/auth/logo'); ?>
								</a>
							</div>
							<h2 class="mb-2 text-center">Sign In</h2>
							<p class="text-center">Login to stay connected.</p>
							<form>
								<div class="row">
									<div class="input-group">
										<input type="email" class="form-control form-control-lg fs-6" id="email" aria-describedby="email" placeholder="Email address or phone number">
									</div>
									<div class="input-group my-3">
										<input type="password" class="form-control form-control-lg fs-6" id="password" aria-describedby="password" placeholder="Password">
									</div>
									<div class="input-group d-flex justify-content-between my-2">
										<div class="form-check mb-3">
											<input type="checkbox" class="form-check-input" id="customCheck1">
											<label class="form-check-label" for="customCheck1">Remember Me</label>
										</div>
										<a href="recoverpw.html">Forgot Password?</a>
									</div>
								</div>
								<div class="d-grid gap-2 mt-1">
									<button type="submit" class="btn btn-primary btn-md px-5">Sign In</button>
								</div>
								<p class="divider-center text-muted mt-5">or Log In with </p>
								<div class="d-flex justify-content-center align-items-center">
									<a class="btn btn-white btn-lg" href="#">
										<img class="avatar me-3" src="<?= base_url("/assets/icon/brands/google.svg"); ?>" alt="Login with Google"> LogIn with Google
									</a>
								</div>
								<p class="mt-3 text-center">
									Don't have an account yet? <a href="<?= base_url("signup"); ?>" class="text-underline">Sign up here</a>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="sign-bg">
				<svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g opacity="0.05">
						<rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF" />
						<rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF" />
						<rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 61.9355 138.545)" fill="#3B8AFF" />
						<rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF" />
					</g>
				</svg>
			</div>
		</div>
		<div class="col-md-7 d-md-block d-none p-0 mt-n1 vh-100 overflow-hidden">
			<div class="row justify-content-center">
				<div class="col-md-10 py-5">
					<img src="<?= base_url("assets/icon/auth/login.svg"); ?>" class="img-fluid gradient-main animated-scaleX" alt="images">
				</div>
			</div>
		</div>
	</div>
</section>
<?= $this->endSection() ?>