<?php 

	
	/* ===================================================
	   Register Custom Post
	   =================================================== */

	function register_garden_custom_posts () {

		if ( function_exists( 'register_post_type' ) ) {

			register_post_type( 'garden' , array(

				'labels' => array(

					'name'                  => esc_html__('Gardens', 'garden' ), 
					'singular_name'         => esc_html__( 'Garden', 'garden' ),
                    'menu_name'             => esc_html__( 'Garden', 'garden' ),
			        'name_admin_bar'        => esc_html__( 'Garden', 'garden' ),
			        'add_new'               => esc_html__( 'Add New Garden', 'garden' ),
			        'add_new_item'          => esc_html__( 'Add New Garden', 'garden' ),
			        'new_item'              => esc_html__( 'New Garden', 'garden' ),
			        'edit_item'             => esc_html__( 'Edit Garden', 'garden' ),
			        'view_item'             => esc_html__( 'View Garden', 'garden' ),
			        'all_items'             => esc_html__( 'All Gardens', 'garden' ),
				),

				'public' 					=> true,
				'publicly_queryable'        => true,
		        'show_ui'                   => true,
		        'show_in_menu'              => true,
                'show_in_nav_menus'         => true,              
		        'query_var'                 => true,
		        'capability_type'           => 'page',
		        'has_archive'               => true,
		        'hierarchical'              => false,
		        'menu_position'             => null,
                'menu_icon'                 => 'dashicons-carrot',

				'supports' => array(

					'editor',
					'thumbnail',

				),

			) );

			register_post_type( 'weekly-tips-area' , array(

				'labels' => array(

					'name'                  => esc_html__('Weekly Tips', 'garden' ), 
					'singular_name'         => esc_html__( 'Weekly Tip', 'garden' ),
                    'menu_name'             => esc_html__( 'Weekly Tips', 'garden' ),
			        'name_admin_bar'        => esc_html__( 'Weekly Tips', 'garden' ),
			        'add_new'               => esc_html__( 'Add New Weekly Tips', 'garden' ),
			        'add_new_item'          => esc_html__( 'Add New Weekly Tips', 'garden' ),
			        'new_item'              => esc_html__( 'New Weekly Tips', 'garden' ),
			        'edit_item'             => esc_html__( 'Edit Weekly Tips', 'garden' ),
			        'view_item'             => esc_html__( 'View Weekly Tips', 'garden' ),
			        'all_items'             => esc_html__( 'All Weekly Tips', 'garden' ),
				),

				'public' 					=> true,
				'publicly_queryable'        => true,
		        'show_ui'                   => true,
		        'show_in_menu'              => true,
                'show_in_nav_menus'         => true,              
		        'query_var'                 => true,
		        'capability_type'           => 'post',
		        'has_archive'               => true,
		        'hierarchical'              => false,
		        'menu_position'             => null,
                'menu_icon'                 => 'dashicons-store',

				'supports' => array(

					'title',
					'editor',
					'thumbnail',

				),

			) );

			register_post_type( 'carousel-item' , array(

				'labels' => array(

					'name'                  => esc_html__('Carousel', 'garden' ), 
					'singular_name'         => esc_html__( 'Carousel', 'garden' ),
                    'menu_name'             => esc_html__( 'Carousel', 'garden' ),
			        'name_admin_bar'        => esc_html__( 'Carousel', 'garden' ),
			        'add_new'               => esc_html__( 'Add New Carousel', 'garden' ),
			        'add_new_item'          => esc_html__( 'Add New Carousel', 'garden' ),
			        'new_item'              => esc_html__( 'New Carousel', 'garden' ),
			        'edit_item'             => esc_html__( 'Edit Carousel', 'garden' ),
			        'view_item'             => esc_html__( 'View Carousel', 'garden' ),
			        'all_items'             => esc_html__( 'All Carousel', 'garden' ),
			        'featured_image'        => _x( 'Carousel Image', 'garden' ),
			        'set_featured_image'    => _x( 'Set Carousel Image', 'garden' ),
			        'remove_featured_image' => _x( 'Remove Carousel Image', 'garden' ),
			        'use_featured_image'    => _x( 'Use Carousel Image', 'garden' ),
				),

				'public' 					=> true,
				'publicly_queryable'        => false,
		        'show_ui'                   => true,
		        'show_in_menu'              => true,
                'show_in_nav_menus'         => true,              
		        'query_var'                 => true,
		        'capability_type'           => 'post',
		        'has_archive'               => false,
		        'hierarchical'              => false,
		        'menu_position'             => null,
                'menu_icon'                 => 'dashicons-smiley',

				'supports' => array(

					'thumbnail',

				),

			) );

		}

	}