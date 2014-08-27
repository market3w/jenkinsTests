<?php
require_once 'affiche.php';
$test = new Affiche();
$test->setValue("Hello World");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
	<h1><?php echo $test->getValue(); ?></h1>
    <?php $a =0; ?>
</body>
</html>