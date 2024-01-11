<?php get_header(); // Load header.php file ?>

		
	<!-- ABOUT SECTION
	======================================================= -->
	
	<!-- Start about_area -->
	<section id="about_area">
		
		<div class="container">
					
			<div class="about_wrapper">
				
				<h2>
					<?php _e( 'Oops! it seems you\'re looking for something that\'s not here. Please try again.' ,'garden' ); ?>
				</h2>

				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" id="search-form" method="get">
											
					<div class="form-group">
						
						<input type="text" value="<?php get_search_query(); ?>" name ="s" id="s" class="form-control" placeholder="Search Here...">
						<input type="hidden" value="submit">

					</div> <!-- End form-group -->
					
				</form>
				
			</div> <!-- End about_wrapper -->
			
		</div> <!-- End container -->
	
	</section> <!-- End about_area -->
	
<?php get_footer(); // Load footer.php file ?>

