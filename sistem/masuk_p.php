<?php 
$ua		= $_POST['a_username'];
$up		= $_POST['a_password'];
include 'libs/function.php';
$sistem	= New Sistem;
$sistem->login($ua,$up);
?>