<?php 
include 'cek.php';
include 'libs/meta.php';
$s_title	= "Dasbor Utama Admin - " . $s_name;
$s_desc		= "";
$s_index	= 0;
$add_head	= "";
$add_footer = "";
include 'theme/head.php';
?>
<body>
    <div id="wrapper">
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<?php
			include 'theme/nav-top.php';
			include 'theme/nav-side.php';
			?>
		</nav>