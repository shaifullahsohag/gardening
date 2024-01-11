<!-- WEEKLY TIPS
	======================================================= -->

<!-- Start weekly_tips_wrapper -->
<section id="weekly_tips_wrapper">
	
	<div class="container">

		<div class="weekly_tips_wrapper">

			<?php 

				$weekly_tips_wrapper = new WP_Query( array(

					'post_type'        => 'weekly-tips-area',
					'posts_per_page'   => 1,

				) );

			 ?>

			<?php if ( have_posts() ) : ?>

				<?php while ( $weekly_tips_wrapper -> have_posts() ) : $weekly_tips_wrapper -> the_post(); ?>

					<div class="row">
									
						<div class="weekly_tips_image">
									
							<div class="col-sm-4" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
								
								<?php if ( has_post_thumbnail() ) : ?>

									<figure>
										
										<?php the_post_thumbnail( 'weekly-tips-img' ); ?>
										
									</figure>
								
								<?php endif; ?>

							</div> <!-- End col-sm-3 -->

						</div> <!-- End weekly_tips_image -->
								
						<div class="weekly_tips_details">
									
							<div class="col-sm-8">
								
								<h3>
									<?php the_title(); ?>
								</h3>

								<?php the_content(); ?>

							</div> <!-- End col-sm-9 -->
							
						</div> <!-- End weekly_tips_details -->
					
					</div> <!-- End row -->

				<?php endwhile; else: ?>

					<h1><?php _e( 'Sorry, no posts were found!' , 'garden' ); ?></h1>

			<?php endif; ?>

		</div> <!-- End weekly_tips_wrapper -->

	</div> <!-- End container -->

</section> <!-- End weekly_tips_wrapper -->