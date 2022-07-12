<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required Meta Tags Always Come First -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="https://htmlstream.com/preview/front-dashboard-v2.0/favicon.ico" />
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
	<?= $this->include('admin/layouts/inc/meta'); ?>
	<?= $this->include('admin/layouts/inc/higherAssets'); ?>
</head>

<body class="">
	<!-- loader Start -->
	<div id="loading">
		<div class="loader simple-loader">
			<div class="loader-body"></div>
		</div>
	</div>
	<!-- loader END -->
	<div class="wrapper">
		<?= $this->renderSection('content'); ?>
		<?= $this->include('admin/layouts/inc/lowerAssets'); ?>
		<?= $this->include('admin/layouts/inc/modals'); ?>
	</div>
</body>

</html>