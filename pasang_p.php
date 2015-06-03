<?php 
include 'libs/function.php';
$install	= New Install;
$x			= $_POST['s_name'];
$y			= $_POST['s_author'];
$au			= $_POST['a_username'];
$ap			= $_POST['a_password'];
$ap			= md5($ap);
$install->sitename($x);
$install->author($y);
$install->r_admin($au,$ap);
header('Location: sistem/index.php');
?>