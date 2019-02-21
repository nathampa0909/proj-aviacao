<?php global $mwpress_opt;
	class comment_walker extends Walker_Comment {
		var $tree_type = 'comment';
		var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );
 
		// constructor – wrapper for the comments list
		function __construct() { ?>

			<section class="comments-list">

		<?php }

		// start_lvl – wrapper for child comments list
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$GLOBALS['comment_depth'] = $depth + 2; ?>
			
			<section class="child-comments comments-list">

		<?php }
	
		// end_lvl – closing wrapper for child comments list
		function end_lvl( &$output, $depth = 0, $args = array() ) {
			$GLOBALS['comment_depth'] = $depth + 2; ?>

			</section>

		<?php }

		// start_el – HTML for comment template
		function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
			$depth++;
			$GLOBALS['comment_depth'] = $depth;
			$GLOBALS['comment'] = $comment;
			$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); 
	
			if ( 'article' == $args['style'] ) {
				$tag = 'article';
				$add_below = 'comment';
			} else {
				$tag = 'article';
				$add_below = 'comment';
			} ?>

			
			<div class="box">
			<article <?php comment_class(empty( $args['has_children'] ) ? '' :'parent') ?> id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/Comment">
				 <article class="media">
				<div class="media-left">
					<figure class="gravatar" style="margin:0;"><?php echo get_avatar( $comment, 65); ?></figure>
				</div>
				<div class="media-content">
				<div class="content">
					<div class="comment-meta post-meta" role="complementary">
						
							<a class="comment-author-link" href="<?php comment_author_url(); ?>" itemprop="author"><?php comment_author(); ?></a>
					
						<time class="comment-meta-item" datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>" itemprop="datePublished"><?php comment_date('jS F Y') ?>, <a href="#comment-<?php comment_ID() ?>" itemprop="url"><?php comment_time() ?></a></time>
						<?php if ($comment->comment_approved == '0') : ?>
						<p class="comment-meta-item">Your comment is awaiting moderation.</p>
						</div><?php endif; ?>
					
					</div>
					
					<div class="comment-content post-content" itemprop="text">
					<?php comment_text() ?>

							<?php
							$reply_href = wp_make_link_relative(
								get_permalink( $comment->comment_post_ID ) 
								) 
								. '?replytocom=' . $comment->comment_ID . '#respond';

							$reply_onclick = 'return addComment.moveForm(&quot;comment-' 
								. $comment->comment_ID 
								. '&quot;, &quot;' 
								. $comment->comment_ID 
								. '&quot;, &quot;respond&quot;, &quot;' 
								. $comment->comment_post_ID 
								. '&quot;)';
							?>

							<a class="button comment-reply-link custom-class is-small" style="" href="<?php 
									echo $reply_href; 
									?>" onclick="<?php 
									echo $reply_onclick; 
									?>">
								<span class="icon">
								  <i class="fa fa-reply"></i>
								</span>
								<span><?php echo __('Responder', 'mwpress'); ?></span>
							  </a>
							<nav class="level-right is-mobile">
									<div class="level-right">
									  <a class="level-item">
										<?php edit_comment_link('<span class="icon is-small"><i class="fa fa-edit"></i></span>','',''); ?>
									  </a>
									 
									</div>
								  </nav>
						</div>						

		<?php }

		// end_el – closing HTML for comment template
		function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

							</article>
							</article>
						</div>
		<?php }

		// destructor – closing wrapper for the comments list
		function __destruct() { ?>

			</section>
		
		<?php }

	} ?>