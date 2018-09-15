<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<?php wp_head(); ?>
</head>
<body>

	<!--  PORTADA -->
	<section class="background-app">
		<header class="header">
			<nav class="navbar navbar-expand-lg navbar-light nav-app">
				<div class="container">
					<a class="navbar-brand" href="<?php echo bloginfo('url').'/index.php'; ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/2.png" class="nav-logo img-fluid"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars icom"></i>
					</button>

					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<ul class="navbar-nav ">
							<li class="nav-item "><a class="nav-link" href="<?php echo bloginfo('url').'/index.php'; ?>">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php/menu'; ?>">Menu</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php/service'; ?>">Service</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo bloginfo('url').'/index.php/contact'; ?>">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="#"><span>Reservation</span></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		



		