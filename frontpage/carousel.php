<!-- CAROUSEL SECTION
	======================================================= -->
		
<div class="container">
	
	<?php 

		$sliders = new WP_Query( array(

			'post_type'      => 'carousel-item',
			'posts_per_page' => 3,

		) );

	 ?>

	 <?php $i=1; ?>

	<div class="carousel slide" data-ride="carousel" id="main_slider">

		<!-- Indicators -->

		<ol class="carousel-indicators">
			<li data-target="#main_slider" data-slide-to="0" class="active"></li>
			<li data-target="#main_slider" data-slide-to="1"></li>
			<li data-target="#main_slider" data-slide-to="2"></li>
		</ol>
		
		<!-- Wrapper for slides -->
				
		<div class="carousel-inner" role="listbox">
			
			<?php if ( $sliders -> have_posts() ) : ?>

				<?php while ( $sliders -> have_posts() ) : $sliders -> the_post(); ?>

					<div class="item <?php if ( $i == 1 ) echo 'active' ?>">
						
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="">
						
					</div> <!-- End item -->
				
					<?php $i++; ?>

				<?php endwhile; wp_reset_query(); ?>

			<?php endif; ?>
			
		</div> <!-- End carousel-inner -->

		<!-- Controls -->
		<a href="#main_slider" class="carousel-control left" role="button" data-slide="prev">
			<span class="icon-prev"></span>
			<span class="sr-only"><?php _e( 'Previous' , 'garden' ); ?></span>
		</a>

		<a href="#main_slider" class="carousel-control right" role="button" data-slide="next">
			<span class="icon-next"></span>
			<span class="sr-only"><?php _e( 'Next' , 'garden' ); ?></span>
		</a>

	</div> <!-- End carousel slide -->
	
</div> <!-- End container -->