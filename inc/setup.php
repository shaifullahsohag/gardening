<?php 


	/* ===================================================
	   Enable after setup supports
	   =================================================== */
	
	function garden_walkthrough_setup () {

		// Enable support for Translation
		if ( function_exists( 'load_theme_textdomain' ) ) {

			load_theme_textdomain( 'garden' , esc_url( get_template_directory_uri() ) . '/lib' );

		}

		if ( function_exists( 'add_theme_support' ) ) {

			// Add default posts and comments RSS feed links to head.
			add_theme_support( 'automatic-feed-links' );

			// Enable support for Custom background
			add_theme_support( 'custom-background' );

			// Enable support for post formats.
			add_theme_support( 'post-formats' , array(

				'aside', 
				'gallery', 
				'audio', 
				'video', 
				'chat', 
				'image', 
				'link', 
				'quote', 
				'status', 

			) );

			// Switch default core markup for searh form, comment form, and comments to output valid HTML5.
			add_theme_support( 'html5' , array(

				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',

			) );

			// Enable support for Post Thumbnails on posts and pages.
			add_theme_support( 'post-thumbnails' );

		}

		// This theme supports wp_nav_menu() in one location
		if ( function_exists( 'register_nav_menus' ) ) {

			register_nav_menus( array(

				'primary-menu' => esc_html__( 'Main Menu' , 'garden' ),

			) );

		}

		// Enable support for Post Thumbnails size on posts and pages
		if ( function_exists( 'add_image_size' ) ) {

			add_image_size( 'blog-img' , 459 , 725 , true );
			add_image_size( 'single-page-img' , 459 , 725 , true );
			add_image_size( 'page-img' , 400 , 260 , true );
			add_image_size( 'fullwidth-page-img' , 1170 , 560 , true );
			add_image_size( 'tips-img' , 113 , 114 , true );
			add_image_size( 'featured-img' , 248 , 248 , true );
			add_image_size( 'weekly-tips-img' , 371 , 282 , true );
		}


	}
	