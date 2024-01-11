<!-- GARDENING TIPS
	======================================================= -->
	
<!-- Start tips_wrapper -->
<section id="tips_wrapper">
	
	<div class="container">
				
		<div class="tips_wrapper">

			<?php 

				$tips_wrapper = new WP_Query( array(

					'post_type'        => 'post',
					'posts_per_page'   => 3,
					'cat'              => 227,

				) );

			 ?>

			<?php if ( have_posts() ) : ?>

				<?php while( $tips_wrapper -> have_posts() ) : $tips_wrapper -> the_post(); ?>
				
					<div class="single_tips" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
						
						<?php if ( has_post_thumbnail() ) : ?>	

							<figure>

								<?php the_post_thumbnail( 'tips-img' , array(

									'class' => 'img-thumbnail',

								) ); ?>

							</figure>

						<?php endif; ?>

						<h3>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>

						<p>
							<?php custom_excerpt_length( 10 ); ?>
						</p>
						
					</div> <!-- End single_tips -->

				<?php endwhile; else : ?>

					<h1><?php _e( 'Sorry, no posts were found!' , 'garden' ); ?></h1>

			<?php endif; ?>
				
		</div> <!-- End tips_wrapper -->

	</div> <!-- End container -->

</section> <!-- End tips_wrapper -->

