<?php 
	
	/* ===================================================
	   Includes
	   =================================================== */

	// Include theme's after setup file
	include_once( get_template_directory() . '/inc/setup.php' );

	// Include theme's enqueue file
	include_once( get_template_directory() . '/inc/enqueue.php' );

	// Include theme's widgets file
	include_once( get_template_directory() . '/inc/widgets.php' );

	// Include theme's custom post file
	include_once( get_template_directory() . '/inc/custom-post.php' );

	// Include Single Post Count View file
	include_once( get_template_directory() . '/inc/count.php' );

	// Include Custom Excerpt File
	include_once( get_template_directory() . '/inc/custom-excerpt.php' );

	// Include Call back Function to display comment.
	include( get_template_directory() . '/inc/display_comment.php' );

	// Customize Comments Fields in single.php
	include( get_template_directory() . '/inc/customize_comments.php' );

    
    /* ===================================================
       Actions and Filers Hook
       =================================================== */

    // Garden Theme After Setup 
    add_action( 'after_setup_theme' , 'garden_walkthrough_setup' );

    // Graden Theme Enqueue Styles and Scripts
    add_action( 'wp_enqueue_scripts' , 'garden_walkthrough_scripts' );

    // Garden theme's widegets init
    add_action( 'widgets_init' , 'garden_walkthrough_widgets_init' );

    // Garden theme's Custom Posts
    add_action( 'init' , 'register_garden_custom_posts' );

    

 ?>