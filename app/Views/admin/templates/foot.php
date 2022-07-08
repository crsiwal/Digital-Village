<?php
foreach ($js as $file) {
?>
	<script src="<?= (isset($file["url"]) && $file["url"] == true) ? $file["path"] : base_url("assets/js/" . $file["path"] . ".js"); ?>"></script>
<?php
}
?>
</body>

</html>