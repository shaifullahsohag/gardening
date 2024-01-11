<?php get_header(); // Load header.php file ?>

			
	<!-- BLOG AREA
	======================================================= -->

	<!-- Start blog_area -->
	<section id="blog_area">
		
		<div class="container">
					
			<div class="blog_wrapper">

				<h2>
					<?php wp_title( '' ); ?>
				</h2>
				
				<div class="row">
							
					<div class="blog_content" >
								
						<div class="col-sm-8">

							<?php if ( have_posts() ) : ?>

								<?php while ( have_posts() ) : the_post(); ?>
							
									<?php get_template_part( 'templates/pages/content-page' , get_post_format() ) ?>

								<?php endwhile; else: ?>

									<h1><?php _e( 'Sorry, no posts were found!' , 'garden' ); ?></h1>

							<?php endif; ?>

							<hr class="fancy_hr">
									
							<div class="comment_area" id="comments">
								
								<?php comments_template( '' , true ); ?>
								
							</div> <!-- End comment_area -->
							
						</div> <!-- End col-sm-8 -->
						
					</div> <!-- End blog_content -->
					
					<?php get_sidebar(); // Load sidebar.php file ?>

				</div> <!-- End row -->

			</div> <!-- End blog_wrapper -->
	
		</div> <!-- End container -->
	
	</section> <!-- End blog_area -->

<?php get_footer(); // Load footer.php file ?>



