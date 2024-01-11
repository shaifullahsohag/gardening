<?php 
	
	/*
		Template Name: Contact Template
	*/ 

 ?>

<?php get_header(); // Load header.php file ?>
	
			
	<!-- CONTACT SECTION
	======================================================= -->
	
	<!-- Start contact_wrapper -->
	<section id="contact_wrapper">
		
		<div class="container">
					
			<div class="contact_wrapper">
				
				<h2>
					<?php wp_title( '' ); ?>
				</h2>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae mollitia id qui nihil alias est aliquam, officia corrupti autem saepe, non odit libero, dolorum quidem quo, quis dolor. Reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ullam libero, repellendus similique nobis repudiandae voluptatibus. Est, aspernatur dolores! A dolor veniam et cupiditate temporibus dignissimos delectus laudantium minima iusto!
				</p>

				<?php if ( have_posts () ) : ?>

					<?php while( have_posts() ) : the_post(); ?>
								
						<div class="full_contact_area">
						
							<div class="row">
										
								<div class="col-sm-5">

									<?php if ( is_active_sidebar( 'contact-sidebar' ) ) : ?>
										
										<?php dynamic_sidebar( 'contact-sidebar' ); ?>

									<?php endif; ?>

								</div> <!-- End col-sm-5 -->

								<?php the_content(); ?>

							</div> <!-- End row -->

						</div> <!-- End full_contact_area -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div> <!-- End contact_wrapper -->
			
		</div> <!-- End container -->
	
	</section> <!-- End contact_wrapper -->
	
<?php get_footer(); // Load footer.php file ?>





























