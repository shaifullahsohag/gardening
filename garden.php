<?php 

	/*
		Template Name: Special Page two
	*/ 

 ?>


<?php get_header(); ?>


	<!-- GARDEN SECTION
	======================================================= -->
	
	<!-- Start plants_area -->
	<section id="garden_area">
		
		<div class="container">
					
			<div class="garden_wrapper">
				
				<h2>
					<?php wp_title( '' ); ?>
				</h2>

				<?php 

					$garden_page = new WP_Query( array (

						'post_type'      => 'garden',
						'posts_per_page' => 3,

					) );


				 ?>

				<?php if ( have_posts() ) : ?>

					<?php while ( $garden_page -> have_posts() ) : $garden_page -> the_post(); ?>
						
						<div class="row">
									
							<div class="single_garden_area" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
								
								<?php if ( has_post_thumbnail() ) : ?>	

									<div class="col-md-4">
										
										<figure>	

											<?php the_post_thumbnail( 'page-img' , array(

												'class' => 'img-thumbnail',

											) ); ?>	

										</figure>

									</div> <!-- End col-sm-4 -->

								<?php endif; ?>

								<div class="col-md-8">

									<article>
									
										<?php the_content(); ?>

									</article>

								</div> <!-- End col-sm-8 -->

							</div> <!-- End single_garden_area -->

						</div> <!-- End row -->

					<?php endwhile; else: ?>

						<h1><?php _e( 'Sorry, no posts were found!' , 'garden' ); ?></h1>

				<?php endif; ?>
				
			</div> <!-- End garden_wrapper -->
			
		</div> <!-- End container -->
	
	</section> <!-- End garden_area -->
	
		
<?php get_footer(); // Load footer.php file ?>

