<?php if (isset($env)) {
    show_filename($env, __FILE__);
} ?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Wektorek.pl - Logowanie</title>
	<!-- Bootstrap Core CSS -->
<!--	<link href="--><?//= base_url() ?><!--assets/admin/css/bootstrap.min.css" rel="stylesheet">-->
	<!-- MetisMenu CSS -->
<!--	<link href="--><?//= base_url() ?><!--assets/admin/css/metisMenu.min.css" rel="stylesheet">-->
	<!-- Custom CSS -->
	<link href="<?php echo base_url(); ?>assets/admin/css/sb-admin-2.css" rel="stylesheet">
	<!-- Custom Fonts -->
	<link href="<?php echo base_url(); ?>assets/admin/css/fontawesome.min.css" rel="stylesheet" type="text/css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		.hidden {
			display: none;
		}
	</style>
</head>
<body class="preload">