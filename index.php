<?php
require_once ('SystemNVN/Config.php');
require_once ('SystemNVN/Function.php');
$_SESSION['randomgas'] = random(12);
$_SESSION['random'] = random(44);
LoginOKLXT('https://'.HomeNVN().'/'.random(50).'ID');
?>
