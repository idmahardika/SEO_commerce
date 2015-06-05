<?php 
$add_head	= "";
?>
<html lang="id">
<head>
	<!-- Meta SEO -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $s_desc;?>">
    <meta name="author" content="<?php echo $s_author;?>">
	<title><?php echo $s_title;?></title>
	<?php
		if ($s_index == 0) {
			echo '<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">';
		}
	?>
	<!-- Library CSS -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">   
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">   
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<?php echo $add_head; ?>	
</head>