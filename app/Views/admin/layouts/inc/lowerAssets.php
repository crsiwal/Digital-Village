<?php
$config = config('Assets');
if (ENVIRONMENT == "development") {
	foreach ($config->filter("js", "foot") as $file) {
?>
		<script src="<?= (isset($file["url"]) && $file["url"] == true) ? $file["path"] : base_url("assets/js/" . $file["path"] . ".js"); ?>"></script>
	<?php
	}
} else {
	foreach ($config->filter("mjs", "foot") as $file) {
	?>
		<script src="<?= (isset($file["url"]) && $file["url"] == true) ? $file["path"] : base_url("assets/js/" . $file["path"] . ".js"); ?>"></script>
<?php
	}
}
