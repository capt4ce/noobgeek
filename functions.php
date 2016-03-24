<?php
add_theme_support( 'post-thumbnails' );

if (get_option('thread_comments')){
  wp_enqueue_script('comment-reply');
}

if ('register_nav_menus'){
  register_nav_menus(array('primary' => 'Header Navigation'));
}

if (function_exists(register_sidebar)){
  register_sidebar(array(
                    'name'=>'Side Widgets',
                    'id'=> 'side-widgets',
                    'description' =>'Place widget for sidebar here',
  ));
}

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(sizes|width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );


function custom_comments ($comment, $args, $depth) {
  $GLOBALS[' comment '] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?>">
    <div class="comment-header">
      <?php echo get_avatar($comment, $size='48', $default='<path_to_url>' ); ?>
      <?php printf (__('<cite_class="fn">%s</cite> <span class="says"> says:</span>'), get_comment_author_link()) ?>
      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link($comment->comment_ID )) ?>">
    </div>
    <?php if ($comment->comment_approved =='0') : ?>
      <em><?php _e('Your Comment is Awaiting Moderation.') ?></em>
      <br />
      <?php endif ; ?>
      <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time() ) ?> </a><?php edit_comment_link(__(' (Edit) '), '   ', ' ') ?>
      </div>
      <?php comment_text() ?>
      <div class="reply">
        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))) ?>
		</div>
  </div>
	<?php
}
 ?>
