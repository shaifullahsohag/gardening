<?php get_header(); // Load header.php file ?>

			
	<!-- BLOG AREA
	======================================================= -->

	<!-- Start blog_area -->
	<section id="blog_area">
		
		<div class="container">
					
			<div class="blog_wrapper">

				<?php if ( have_posts() ) : ?>

					<h2>
						<?php _e( 'Search Result for:' , 'garden' ); ?><?php echo get_search_query(); ?>
					</h2>

				<?php else: ?>

					<h2>
						<?php _e( 'Sorry, Nothing Found!' , 'garden' ); ?>
					</h2>

				<?php endif; ?>
				
				<div class="row">
							
					<div class="blog_content">
								
						<div class="col-sm-8">

							<?php if ( have_posts() ) : ?>

								<?php while ( have_posts() ) : the_post(); ?>

									<?php get_template_part( 'templates/formats/content' , get_post_format() ); ?>

								<?php endwhile; ?>

							<?php endif; ?>

							<div class="articles_nav">
								
								<p class="articles_nav_prev">
									<?php next_posts_link(__( '&laquo; Older Posts' , 'garden' ) ); ?>
								</p>

								<p class="articles_nav_next">
									<?php previous_posts_link( __( 'Newer Posts &raquo;' , 'garden' ) ); ?>
								</p>

							</div> <!-- End articles_nav -->
							
						</div> <!-- End col-sm-8 -->
						
					</div> <!-- End blog_content -->
					
					<?php get_sidebar(); // Load sidebar.php file ?>
					
				</div> <!-- End row -->

			</div> <!-- End blog_wrapper -->
	
		</div> <!-- End container -->
	
	</section> <!-- End blog_area -->

<?php get_footer(); // Load footer.php file ?>
