<?php 
	
	/*
		Template Name: Front Page Template
	*/ 

 ?>


<?php get_header(); // Load header.php file ?>
	
			
	<?php get_template_part( 'frontpage/carousel' ); // Load carousel.php file ?>
		
	<?php get_template_part( 'frontpage/tips' ); // Load tips.php file ?>
			
	<?php get_template_part( 'frontpage/featured' ); // Load featured.php file ?>
			
	<?php get_template_part( 'frontpage/weeklytips' ); // Load weeklytips.php file ?>
	
			
<?php get_footer(); // Load footer.php file ?>





























