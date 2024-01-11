<?php 

    /* ===================================================
       Function to Display Comments
       =================================================== */
       function garden_comments ( $comment , $args , $depth ) {

       		$GLOBALS['comment'] = $comment;

       		if ( get_comment_type() == 'pingback'  || get_comment_type() == 'trackback' ) : ?>

       			<li class="pingback" id="comment-<?php comment_ID(); ?>" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
										
					<article <?php comment_class( 'clearfix' ); ?>>
						
						<header>
							
							<h5><?php _e( 'Pinkback' , 'garden' ); ?></h5>

							<p><?php edit_comment_link(); ?></p>

						</header>

						<figure class="comment_avatar">
							<a href="#"><img src="images/avatar.png" alt=""></a>
						</figure>

						<?php comment_author_link(); ?>

					</article> 

				</li>

       		<?php elseif ( get_comment_type() == 'comment' ) : ?>

       			<li id="comment-<?php comment_ID(); ?>" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
										
						<article <?php comment_class( 'clearfix' ); ?>>
							
							<header>
								
								<h5>
									<span><?php _e('Author', 'garden'); ?></span><?php comment_author_link(); ?>
								</h5>

								<p>
									<span>On <?php comment_date(); ?> at <?php comment_time(); ?> - </span><?php comment_reply_link( array_merge( $args, array(

											'depth'     => $depth,
											'max_depth' => $args ['max_depth'],

									) )); ?></a>

								</p>

							</header>

							<figure class="comment_avatar">
								
								<?php 

									$avatar_size = 70;

									if ( $comment -> comment_parent != 0 ) {

										$avatar_size = 64;
									}

									echo get_avatar( $comment , $avatar_size );

								 ?>

							</figure>

							<?php if ( $comment -> comment_approved == '0' ) : ?>

								<p class="awaiting_moderation"><?php _e( 'Your comment is awaiting moderation' , 'garden' ); ?></p>

							<?php endif; ?>
							
							<?php comment_text(); ?>

						</article>


       		<?php endif; 
       }