<?php

/*변수 등록 */
  define('THEMEROOT',get_stylesheet_directory_uri());
  define('IMAGES'.THEMEROOT.'/images');


if(! function_exists('minimal_script')){
  function minimal_script(){

    //스크립트 등록
    wp_register_script( 'bootstrap-js', THEMEROOT.'/css/common.css',true,false,true );
    //스크립트 로드
    wp_enqueue_script( 'bootstrap-js' );
    //css 로드
    wp_enqueue_style( 'common-css', THEMEROOT.'/css/common.css' );
    wp_enqueue_style( 'bootstrap-grid', THEMEROOT.'/css/bootstrap-grid.css' );
    wp_enqueue_style( 'default', THEMEROOT.'/css/default.css' );
    wp_enqueue_style( 'responsive', THEMEROOT.'/css/responsive.css' );
  }
  add_action('wp_enqueue_script','minimal_script');
}