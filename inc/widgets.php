<?php 

	
	/* ===================================================
	   Register Widgets Area
	   =================================================== */

	function garden_walkthrough_widgets_init () {

		if ( function_exists( 'register_sidebar' ) ) {

			register_sidebar( array(

				'name'            => esc_html__( 'Right Sidebar' , 'garden' ),
				'description'     => esc_html__( 'Sidebar of Blog page and Single Page.' , 'garden' ),
				'id'              => 'right-sidebar',
				'before_widget'   => '<div class="single_blog_widget">',
				'after_widget'    => '</div> <!-- End single_blog_widget -->',
				'before_title'    => '<h3>',
				'after_title'     => '</h3>',

			) );

			register_sidebar( array(

				'name'            => esc_html__( 'Footer Sidebar' , 'garden' ),
				'description'     => esc_html__( 'Sidebar of Footer Area.' , 'garden' ),
				'id'              => 'footer-sidebar',
				'before_widget'   => '<div class="singel_footer_widget"><div class="col-sm-3">',
				'after_widget'    => '</div> <!-- End col-sm-3 --></div> <!-- End singel_footer_widget -->',
				'before_title'    => '<h3>',
				'after_title'     => '</h3>',

			) );

			register_sidebar( array(

				'name'            => esc_html__( 'Contact Sidebar' , 'garden' ),
				'description'     => esc_html__( 'Sidebar of Contact.' , 'garden' ),
				'id'              => 'contact-sidebar',
				'before_widget'   => '<div class="contact_info_left">',
				'after_widget'    => '</div> <!-- End contact_info_left -->',
				'before_title'    => '',
				'after_title'     => '',

			) );

		}

	}



