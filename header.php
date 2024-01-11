<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Designed by: Shaifulla Sohag -->
<head>
	<!-- Website Title & Description for Search Engine purposes -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- For IE Compatability -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php wp_title( '|' , true , 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	
	<!-- Fevicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sohag.ico">

    <?php wp_head(); //WP API HOOK  ?>
	
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
        <p class="browser_upgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
			
	<!-- SITE HEADER
	======================================================= -->

	<!-- Start site_header -->
	<header id="site_header">
		
		<div class="container">
					
			<div class="header_top text-center overflow_hidden">
						
				<div class="site_logo" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
					
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="">

				</div> <!-- End site_logo -->
						
				<div class="site_description" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
					
					<h2>
						<a href="<?php echo esc_url( home_url() ); ?>"><span>Garden</span> Walkthrough</a>
					</h2>

					<p>
						<?php bloginfo( 'description' ); ?>
					</p>

				</div> <!-- End site_description -->
				
			</div> <!-- End header_top -->
			
		</div> <!-- End container -->
				
		<div class="container">
					
			<div class="main_navigation overflow_hidden">
				
				<nav>
							
					<div class="navbar-header">
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu" aria-expanded="false">
							
							<span class="sr-only"><?php _e( 'Toggle navigation' , 'garden' ); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>

						</button>
						
					</div> <!-- End navbar-header -->
							
					<div class="navbar-collapse collapse" id="main_menu">
						
						<?php 

							if ( function_exists( 'wp_nav_menu' ) ) {

								wp_nav_menu( array (

									'container'      => 'nav',
									'menu_class'     => 'nav navbar-nav',
									'theme_location' => 'primary-menu',

								) );

							}

						 ?>

					</div> <!-- End navbar-collapse collapse -->
					
				</nav>

			</div> <!-- End main_navigation -->
			
		</div> <!-- End container -->
		
	</header>
	<!-- End site_header -->