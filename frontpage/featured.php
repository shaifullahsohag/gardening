<!-- FEATURED SECTION
	======================================================= -->
	
<!-- Start featured_wrapper -->
<section id="featured_wrapper">
	
	<div class="container">
				
		<div class="featured_area">
			
			<h2>
				Featured Gardens
			</h2>
					
			<div class="row">

				<?php 

					$featured_wrapper = new WP_Query( array(

						'post_type'         => 'post',
						'posts_per_page'    => 4,
						'cat'               => 225,

					) );


				 ?>

				<?php if ( have_posts() ) : ?>

					<?php while ( $featured_wrapper -> have_posts() ) : $featured_wrapper -> the_post(); ?>
						
						<div class="singel_featured_area">
									
							<div class="col-sm-3" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
								
								<?php if ( has_post_thumbnail() ) : ?>

									<figure>

										<?php the_post_thumbnail( 'featured-img' , array(

											'class' => 'img-thumbnail',

										) ); ?>
										
									</figure>

								<?php endif; ?>
								
								<h3>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>

								<p>
									<?php custom_excerpt_length( 11 ); ?>
								</p>

							</div> <!-- End col-sm-3 -->
							
						</div> <!-- End singel_featured_area -->

					<?php endwhile; else: ?>

						<h1><?php _e( 'Sorry, no posts were found!' , 'garden' ); ?></h1>

				<?php endif; ?>
				
			</div> <!-- End row -->

		</div> <!-- End featured_area -->

	</div> <!-- End container -->

</section> <!-- End featured_wrapper -->

