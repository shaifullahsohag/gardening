<?php 

	// Prevent the direct loading of this file.
	if ( !empty( $_SERVER ['SCRIPT-FILENAME'] ) && basename( $_SERVER['SCRIPT-FILENAME'] ) == 'comments.php' ) {

		die(__( 'You cannot access this file directly.' , 'garden' ) );

	}

	// Check if post is password protected.
	if ( post_password_required() ) : ?>

		<p>

			<?php echo _e( 'This post is password protected. Enter the password to view the comments.' , 'garden' ); ?>

			<?php return; ?>

		</p>

	<?php endif;

	

	// Show The Comment Approved Comments.
	if ( have_comments() ) : ?>

	
		<a href="#respond" class="article_add_comments">+</a>

		<h4>

			<?php comments_number( 
				__( 'No Comments to this article' , 'garden' ) ,
				__( 'One Comment to this article' , 'garden' ) , 
				__( '% Comments to this article' , 'garden' ) ); 
			?>

		</h4>

		<ol class="comments_list">
			
			<?php wp_list_comments( 'type=comment&callback=garden_comments' ); ?>

		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

			<div class="comments_nav_section">
										
				<p class="old_comments">
					<a href="#"><?php previous_comments_link( '&larr; Older Comments' , 'garden' ); ?></a>
				</p>

				<p class="new_comments">
					<a href="#"><?php next_comments_link( 'Newer Comments &rarr;', 'garden' ); ?></a>
				</p>

			</div> <!-- End comments_nav_section -->

		<?php endif; ?>


	<?php elseif ( !comments_open() && !is_page() && post_type_supports( get_post_type() , 'comments' ) ) : ?>

		<p>
			<?php _e( 'Comments are closed.' , 'garden' ); ?>
		</p>

	<?php endif;

	// Display comments form
	comment_form();

 ?>

