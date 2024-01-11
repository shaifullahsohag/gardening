<form action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" id="search-form" method="get">
											
	<div class="form-group">
		
		<input type="text" value="<?php get_search_query(); ?>" name ="s" id="s" class="form-control" placeholder="<?php the_search_query(); ?>">
		<input type="hidden" value="submit">

	</div> <!-- End form-group -->
	
</form>