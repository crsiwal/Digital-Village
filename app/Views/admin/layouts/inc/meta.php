<?php
foreach ($meta as $name => $value) {
	switch ($name) {
		case 'title':
		?>
			<title><?= $value; ?></title>
		<?php
			break;
		default:
		?>
			<meta name="<?= $name; ?>" content="<?= $value; ?>" />
		<?php
			break;
	}
}
