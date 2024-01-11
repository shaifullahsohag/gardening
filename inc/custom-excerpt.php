<?php 


    /* ===================================================
       Customize Excerpt Link
       =================================================== */


	// Add Continue Reading instead od DOT
	function remove_dot_from_excerpt( $remove ) {

		return '<a href=" '.get_the_permalink().' " class="read_more_link">&nbsp;Continue Reading &raquo;</a>';

	}
	add_action( 'excerpt_more' , 'remove_dot_from_excerpt' );

	// Control Excerpt Length
	function control_excerpt_length ( $length ) {

		return 30;

	}
	add_action( 'excerpt_length' , 'control_excerpt_length' );

	// Customize Excerpt Length
	function custom_excerpt_length ( $limit ) {

		$post_content = explode( ' ' , get_the_content() );

		$maximum_post_content = array_slice( $post_content , 0 , $limit );

		echo implode( ' ' , $maximum_post_content );

	}