
	<!-- FOOTER
	======================================================= -->
	
	<!-- Start site_footer -->
	<footer id="site_footer">
		
		<div class="container">
					
			<div class="site_footer_wrapper">
						
				<div class="row">
					
					<div data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

						<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>

							<?php dynamic_sidebar( 'footer-sidebar' ); ?>

						<?php endif; ?>
						
					</div>	
					
				</div> <!-- End row -->
				
			</div> <!-- End site_footer_wrapper -->
	
		</div> <!-- End container -->
				
		<div class="copyright_info">
					
			<div class="container">
				
				<p class=" text-center">
					<span id="scroll_to_top" data-toggle="tooltip" class="glyphicon glyphicon-chevron-up"></span>
				</p>
				
				<h6 class="text-center">
					Developed by &#64; Shaifulla Sohag | &nbsp;<?php echo date( 'Y' ); ?>
				</h6>

			</div> <!-- End container -->
			
		</div> <!-- End copyright_info -->
		
	</footer>
	<!-- End site_footer -->

	<?php wp_footer(); // WP API HOOK ?>

</body>
</html>


