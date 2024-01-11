<?php 

    /* ===================================================
       Enqueue Scripts and Styles
       =================================================== */

	function garden_walkthrough_scripts() {

		// Register theme's all styles

		$garden_walkthrough_theme = wp_get_theme();
		$theme_version = $garden_walkthrough_theme -> get( 'version' );

		// UI KIT Core CSS v.2.27.2
		wp_enqueue_style( 'uikit' , esc_url( get_template_directory_uri() ) . '/css/uikit.min.css' , array() , '2.27.2' , 'all' );

		// Bootstrap Core CSS v3.3.7
		wp_enqueue_style( 'bootstrap' , esc_url( get_template_directory_uri() ) . '/css/bootstrap.min.css' , array() , '3.3.7' , 'all' );

		// Normalize CSS
		Wp_enqueue_style( 'normalize' , esc_url( get_template_directory_uri() ) . '/css/normalize.css' , array() , '3.0.3' , 'all' );

		// Custom CSS
		wp_enqueue_style( 'custom' , esc_url( get_template_directory_uri() ) . '/style.css' , array() , '1.0' , 'all' );

		// Responsive CSS
		wp_enqueue_style( 'responsive', esc_url( get_template_directory_uri() ) . '/css/responsive.css' , array() , '1.0' , 'all' );

		// HTML5 shim for IE8 support of HTML5 elements and media queries.
		wp_register_script( 'html5shiv' , 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js' );
		wp_script_add_data( 'html5shiv' , 'conditional' , 'lt IE 9' );

		// Respond.js for IE8 support of HTML5 elements and media queries.
		wp_register_script( 'respond' , 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js' );
		wp_script_add_data( 'respond' , 'conditional' , 'lt IE 9' );


		// Register theme's scripts

		// Register Default jQuery of WordPress
		wp_enqueue_script( 'jquery' );

		// UI KIT JS v.2.27.2 from CDN
		wp_enqueue_script( 'uikit-js' , esc_url( get_template_directory_uri() ) . '/js/uikit.min.js' , array( 'jquery' ) , '2.27.2' , true );

		// Fitvids js
		wp_enqueue_script( 'fitvids-js' , esc_url( get_template_directory_uri() ) . '/js/jquery.fitvids.js' , array( 'jquery' ) , NULL , true );

		// Bootstrap JS v3.3.7
		wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' , array( 'jquery' ) , esc_attr( $garden_walkthrough_theme ) , true );

		// Custom js
		wp_enqueue_script( 'custom-js' , esc_url( get_template_directory_uri() ) . '/js/custom.js' , array( 'jquery' ) , esc_attr( $garden_walkthrough_theme ) , true );

		// Font Awesome Embeded Code
		wp_enqueue_script( 'fontawesome' , 'https://use.fontawesome.com/af7b1e2382.js' , array( 'jquery' ) , '4.7.0' , true );

		// Enable Ajax in Thredated Comment.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}