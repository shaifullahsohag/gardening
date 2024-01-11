<?php 

	/*
		Template for Standard Post
	*/ 

 ?>


<article <?php post_class();  ?> id="post-<?php the_ID(); ?>" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

<header>

	<span id="video_format_link" class="glyphicon glyphicon-facetime-video"></span>

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
		
<div class="video_container">
	
	<?php the_content(); ?>

</div> <!-- End quote_container -->

</article>

<hr class="fancy_hr">