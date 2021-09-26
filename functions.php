<?php
function my_scripts() {

	  // WordPress提供のjquery.jsを読み込まない
		wp_deregister_script('jquery');

		// jQueryの読み込み
		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.j', "", "20210623", false );

		// サイト共通JS
		wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '20210623', true );

  	wp_enqueue_style( 'css-style', get_template_directory_uri() . '/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
);
}