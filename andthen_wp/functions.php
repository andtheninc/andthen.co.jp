<?php
add_action('init', function() {
    remove_filter('the_title', 'wptexturize');
    remove_filter('the_content', 'wptexturize');
    remove_filter('the_excerpt', 'wptexturize');
    remove_filter('the_title', 'wpautop');
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('the_editor_content', 'wp_richedit_pre');
});

add_filter('tiny_mce_before_init', function($init) {
    $init['wpautop'] = false;
    $init['apply_source_formatting'] = ture;
    return $init;
});

register_nav_menus(array('cat-nav'=>'blog-menu'));

register_sidebar();

add_theme_support( 'post-thumbnails' );

function url_shortcode() {
  return get_template_directory_uri();
}
add_shortcode('url', 'url_shortcode');

function link_shortcode() {
  return home_url();
}
add_shortcode('link', 'link_shortcode');

function stylesheet_shortcode() {
  return bloginfo('stylesheet_directory');
}
add_shortcode('stylesheet', 'stylesheet_shortcode');

function my_scripts_method() {
wp_enqueue_script('pace', get_settings('site_url').'/wp-content/themes/andthen_wp/library/js/pace.min.js', array(), '1.0.0', true);
wp_enqueue_script('particleground', get_settings('site_url').'/wp-content/themes/andthen_wp/library/js/jquery.particleground.min.js', array(), '1.1.0', true);
wp_enqueue_script('animsition', get_settings('site_url').'/wp-content/themes/andthen_wp/library/js/animsition.min.js', array(), '4.0.2', true);
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function my_post_queries( $query ) {
  // 管理画面のクエリを変更せず、さらにメインクエリだけにする
  if ( ! is_admin() && $query->is_main_query() ) {
    // ホームとカテゴリーページのクエリを変更
    if ( is_home() ) {
      $query->set( 'posts_per_page', 6 );
			$query->set( 'post_type', 'portfolio' );
    }

		if ( is_page( 'works' ) ) {
			$query->set( 'post_type', 'portfolio' );
    }

		// if ( $query->is_category( '未分類' ) ) {
    //   $query->set( 'posts_per_page', 12 );
		// 	$query->set( 'post_type', 'post' );
    // }

  }
}
add_action( 'pre_get_posts', 'my_post_queries' );
