<!DOCTYPE HTML>
<html>
<head>
<?php
$root_path = '.';
include_once $root_path.'/../assets/meta.php';
?>
<link rel="stylesheet" type="text/css" href="/assets/css/about.css">
</head>
<body>
	<header>
<?php // navbar
include_once $root_path.'/../assets/nav.php';
?>
	</header><!-- /container -->

<?php
include_once $root_path.'/about.php';
?>

<?php // footer
include_once $root_path.'/../assets/footer.php';
?>
</body>
</html>