<?php 

	/*
		Template for Link Post
	*/ 

 ?>


<article <?php post_class();  ?> id="post-<?php the_ID(); ?>" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

	<header>
									
		<span id="link_format" class="glyphicon glyphicon-link"></span>

		<h3>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>

		<p class="article_meta_date">
			<span class="glyphicon glyphicon-time"></span> Date : <?php the_time( 'F j, Y' ); ?>
		</p>
		
		<p class="article_meta_author">
			<span class="glyphicon glyphicon-user"></span> Author: <?php the_author_posts_link(); ?>
		</p>

		<p class="article_meta_views">
			<span class="glyphicon glyphicon-eye-open"></span> Views: <?php echo get_post_views( get_the_ID() ); ?>
		</p>

	</header>
			
	<div class="link_container">

		<span><?php the_content(); ?></span>

	</div> <!-- End quote_container -->

</article>

<hr class="fancy_hr">