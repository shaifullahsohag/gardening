<?php 

	/*
		Template for Standard Single page.
	*/ 

 ?>


	<article data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
											
		<?php if ( has_post_thumbnail() ) : ?>

			<figure class="article_preview_image">
				
				<?php the_post_thumbnail( 'single-page-img' , array(

					'class' => 'img-thumbnail',

				) ); ?>

			</figure>

		<?php endif; ?>
		
		<header>

			<h3>
				<?php the_title(); ?>
			</h3>

			<?php set_post_views( get_the_ID() ); ?>

			<p class="article_meta_date">
				<span class="glyphicon glyphicon-time"></span> Posted at: <?php the_time( 'g:i:s a' ); ?>
			</p>
			
			<p class="article_meta_author">
				<span class="glyphicon glyphicon-user"></span> Author: <?php the_author_posts_link(); ?>
			</p>

		</header>

		<?php the_content(); ?>
			
	</article>

	<?php if ( has_tag() ) : ?>

		<p class="tag_container" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
			<span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;<?php the_tags( 'Tags: ' , ' , ' ); ?>
		</p>

	<?php endif; ?>
			
	<div class="post_navigation text-center">

		<?php wp_link_pages( array(

				'before'           => '<p class="single_post_nav">' . esc_html__( 'Page: ' , 'garden' ),
				'after'            => '</p>',
				'link_before'      => '',       
				'link_after'       => '',
				'next_or_number'   => 'next',
				'nextpagelink'     => esc_html__( 'Next Page &raquo;' , 'garden' ),
				'previouspagelink' => esc_html__( '&laquo; Previous Page' , 'garden' ),
				'pageLink'         => '%',
				'echo'             => 1,

			) ); 

		?>		

	</div> <!-- End post_navigation text-center -->
	
	<div class="article_author" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
		
		<h5>
			Author by : <?php the_author_posts_link(); ?>
		</h5>

		<p>
			<?php the_author_meta( 'description' ); ?>
		</p>

	</div> <!-- End article_author -->

	