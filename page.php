<?php get_header(); // Load header.php file ?>

		
	<!-- ABOUT SECTION
	======================================================= -->
	
	<!-- Start about_area -->
	<section id="about_area">
		
		<div class="container">
					
			<div class="about_wrapper">
				
				<h2>
					<?php wp_title( '' ); ?>
				</h2>

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php if ( has_post_thumbnail() ) : ?>
					
							<figure data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
								
								<?php the_post_thumbnail( 'fullwidth-page-img' ); ?>

							</figure>

						<?php endif; ?>
						
						<div class="about_area_content" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">

							<article>

								<?php the_content(); ?>

							</article>
							
						</div> <!-- End about_area_content -->

					<?php endwhile; else: ?>

						<h1><?php _e( 'Sorry, no posts were found!' , 'garden' ); ?></h1>

				<?php endif; ?>
				
			</div> <!-- End about_wrapper -->
			
		</div> <!-- End container -->
	
	</section> <!-- End about_area -->
	
<?php get_footer(); // Load footer.php file ?>

