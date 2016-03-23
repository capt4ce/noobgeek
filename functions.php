<?php
add_theme_support( 'post-thumbnails' );

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
 ?>
