<?php 

	/*
		Template for Standard Post
	*/ 

 ?>


<article <?php post_class();  ?> id="post-<?php the_ID(); ?>" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">

		<p class="article_meta_categories">
			<span class="glyphicon glyphicon-bookmark">&nbsp;</span><?php the_category( '&nbsp;/&nbsp;' ); ?>
		</p>

		<?php if ( has_post_thumbnail() ) : ?>

			<figure class="article_preview_image">

				<a href="<?php the_permalink(); ?>">

					<?php the_post_thumbnail( 'blog-img' , array(	

						'class' => 'img-thumbnail',

					) ); ?>

				</a>

			</figure>

		<?php endif; ?>
		
		<header>

			<?php 

				// Display the comment if comments are allowed and post isn't pwd protected.
				if ( comments_open() && !post_password_required() ) {

					comments_popup_link( '0' , '1' , '%' , 'article_meta_comment' );

				}

			 ?>
			
			<h3>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h3>

			<p class="article_meta_date">
				<span class="glyphicon glyphicon-time"></span> Posted at: <?php the_time( 'F j, Y' ); ?>
			</p>
			
			<p class="article_meta_author">
				<span class="glyphicon glyphicon-user"></span> Author: <?php the_author_posts_link(); ?>
			</p>

			<p class="article_meta_views">
				<span class="glyphicon glyphicon-eye-open"></span> Views: <?php echo get_post_views( get_the_ID() ); ?>
			</p>

		</header>

		<?php the_excerpt(); ?>
		
	</article>

	<hr class="fancy_hr">

	