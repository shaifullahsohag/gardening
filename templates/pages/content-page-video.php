<?php 

	/*
		Template for Standard Post
	*/ 

 ?>


<article data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

<header>

	<span id="video_format_link" class="glyphicon glyphicon-facetime-video"></span>

	<h3>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>

	<p class="article_meta_date">
		<span class="glyphicon glyphicon-time"></span> Date : <?php the_time( 'g:i:s a' ); ?>
	</p>
	
	<p class="article_meta_author">
		<span class="glyphicon glyphicon-user"></span> Author: <?php the_author_posts_link(); ?>
	</p>

	<?php set_post_views( get_the_ID() ); ?>

</header>
		
<div class="video_container">
	
	<?php the_content(); ?>

</div> <!-- End quote_container -->

</article>

<?php if ( has_tag() ) : ?>

	<p class="tag_container" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
		<span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;<?php the_tags( 'Tags: ' , ' , ' ); ?>
	</p>

<?php endif; ?>
