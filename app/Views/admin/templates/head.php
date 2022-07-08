<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required Meta Tags Always Come First -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://htmlstream.com/preview/front-dashboard-v2.0/favicon.ico">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

	<!-- Title -->
	<title>Log In | Front - Admin &amp; Dashboard Template</title>
	<?php
	foreach ($css as $file) {
	?>
		<link rel="stylesheet" href="<?= (isset($file["url"]) && $file["url"] == true) ? $file["path"] : base_url("assets/css/" . $file["path"] . ".css"); ?>" />
	<?php
	}
	foreach ($js as $file) {
	?>
		<script src="<?= (isset($file["url"]) && $file["url"] == true) ? $file["path"] : base_url("assets/js/" . $file["path"] . ".js"); ?>"></script>
	<?php
	}
	?>
</head>

<body>