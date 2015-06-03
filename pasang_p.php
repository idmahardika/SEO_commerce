<?php 
include 'libs/function.php';
$install	= New Install;
$x			= $_POST['s_name'];
$y			= $_POST['s_author'];
$install->sitename($x);
$install->author($y);
header('Location: sistem/index.php');
?>