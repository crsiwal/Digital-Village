<?php
$config = config('Assets');
if (ENVIRONMENT == "development") {
	foreach ($config->filter("css", "head") as $file) {
?>
		<link rel="stylesheet" href="<?= (isset($file["url"]) && $file["url"] == true) ? $file["path"] : base_url("assets/css/" . $file["path"] . ".css"); ?>" />
	<?php
	}
	foreach ($config->filter("js", "head") as $file) {
	?>
		<script src="<?= (isset($file["url"]) && $file["url"] == true) ? $file["path"] : base_url("assets/js/" . $file["path"] . ".js"); ?>"></script>
	<?php
	}
} else {
	foreach ($config->filter("mcss", "head") as $file) {
	?>
		<link rel="stylesheet" href="<?= (isset($file["url"]) && $file["url"] == true) ? $file["path"] : base_url("assets/css/" . $file["path"] . ".css"); ?>" />
	<?php
	}
	foreach ($config->filter("mjs", "head") as $file) {
	?>
		<script src="<?= (isset($file["url"]) && $file["url"] == true) ? $file["path"] : base_url("assets/js/" . $file["path"] . ".js"); ?>"></script>
<?php
	}
}
