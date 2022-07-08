<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="main pt-0">
	<!-- Content -->
	<div class="container-fluid px-3">
		<div class="row">
			<div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
				<!-- Logo -->
				<div class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
					<div class="d-none d-lg-flex justify-content-between">
						<a href="/">
							<img class="w-100" src="https://htmlstream.com/preview/front-dashboard-v2.0/assets/svg/logos/logo.svg" alt="Image Description" data-hs-theme-appearance="default" style="min-width: 7rem; max-width: 7rem;">
						</a>
					</div>
				</div>
				<!-- End Logo -->

				<div style="max-width: 23rem;">
					<div class="text-center mb-5">
						<img class="img-fluid" src="<?= base_url("assets/icon/chatting.svg"); ?>" alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="default">
					</div>

					<div class="mb-5">
						<h2 class="display-5">Build a trust by digital records</h2>
					</div>

					<!-- List Checked -->
					<ul class="list-checked list-checked-lg list-checked-primary list-py-2">
						<li class="list-checked-item">
							<span class="d-block fw-semi-bold mb-1">All-in-one tool</span>
							Connect peoples, records, and lists - end to end
						</li>

						<li class="list-checked-item">
							<span class="d-block fw-semi-bold mb-1">Easily add &amp; manage your events</span>
							It brings together your events, timelines, updates and more
						</li>
					</ul>
					<!-- End List Checked -->
				</div>
			</div>
			<!-- End Col -->

			<div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
				<div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
					<!-- Form -->
					<form class="js-validate needs-validation" novalidate>
						<div class="text-center">
							<div class="mb-5">
								<h1 class="display-5">Create your account</h1>
								<p>Already have an account? <a class="link" href="./authentication-login-cover.html">Sign in here</a></p>
							</div>

							<div class="d-grid mb-4">
								<a class="btn btn-white btn-lg" href="#">
									<span class="d-flex justify-content-center align-items-center">
										<img class="avatar avatar-xss me-2" src="./assets/svg/brands/google-icon.svg" alt="Image Description">
										Sign up with Google
									</span>
								</a>
							</div>

							<span class="divider-center text-muted mb-4">OR</span>
						</div>

						<label class="form-label" for="fullNameSrEmail">Full name</label>

						<!-- Form -->
						<div class="row">
							<div class="col-sm-6">
								<!-- Form -->
								<div class="mb-4">
									<input type="text" class="form-control form-control-lg" name="fullName" id="fullNameSrEmail" placeholder="Mark" aria-label="Mark" required>
									<span class="invalid-feedback">Please enter your first name.</span>
								</div>
								<!-- End Form -->
							</div>

							<div class="col-sm-6">
								<!-- Form -->
								<div class="mb-4">
									<input type="text" class="form-control form-control-lg" placeholder="Williams" aria-label="Williams" required>
									<span class="invalid-feedback">Please enter your last name.</span>
								</div>
								<!-- End Form -->
							</div>
						</div>
						<!-- End Form -->

						<!-- Form -->
						<div class="mb-4">
							<label class="form-label" for="signupSrEmail">Your email</label>
							<input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail" placeholder="Markwilliams@site.com" aria-label="Markwilliams@site.com" required>
							<span class="invalid-feedback">Please enter a valid email address.</span>
						</div>
						<!-- End Form -->

						<!-- Form -->
						<div class="mb-4">
							<label class="form-label" for="signupSrPassword">Password</label>

							<div class="input-group input-group-merge" data-hs-validation-validate-class>
								<input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                           "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                           "defaultClass": "bi-eye-slash",
                           "showClass": "bi-eye",
                           "classChangeTarget": ".js-toggle-password-show-icon-1"
                         }'>
								<a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
									<i class="js-toggle-password-show-icon-1 bi-eye"></i>
								</a>
							</div>

							<span class="invalid-feedback">Your password is invalid. Please try again.</span>
						</div>
						<!-- End Form -->

						<!-- Form -->
						<div class="mb-4">
							<label class="form-label" for="signupSrConfirmPassword">Confirm password</label>

							<div class="input-group input-group-merge" data-hs-validation-validate-class>
								<input type="password" class="js-toggle-password form-control form-control-lg" name="confirmPassword" id="signupSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                           "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                           "defaultClass": "bi-eye-slash",
                           "showClass": "bi-eye",
                           "classChangeTarget": ".js-toggle-password-show-icon-2"
                         }'>
								<a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
									<i class="js-toggle-password-show-icon-2 bi-eye"></i>
								</a>
							</div>

							<span class="invalid-feedback">Password does not match the confirm password.</span>
						</div>
						<!-- End Form -->

						<!-- Form Check -->
						<div class="form-check mb-4">
							<input class="form-check-input" type="checkbox" value="" id="termsCheckbox" required>
							<label class="form-check-label" for="termsCheckbox">
								I accept the <a href="#">Terms and Conditions</a>
							</label>
							<span class="invalid-feedback">Please accept our Terms and Conditions.</span>
						</div>
						<!-- End Form Check -->

						<div class="d-grid gap-2">
							<button type="submit" class="btn btn-primary btn-lg">Create an account</button>
						</div>
					</form>
					<!-- End Form -->
				</div>
			</div>
			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
	<!-- End Content -->
</main>