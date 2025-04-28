<?php
  

function strategy_assets() {
  
    
  wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css?ver='.time(), array(), false, 'all' );
  
  wp_enqueue_style( 'vendor', get_template_directory_uri() . '/assets/css/vendor.css?ver='.time(), array(), false, 'all' );
  
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js?ver=9999', array(), '20151215', true );
}

add_filter('style_loader_tag', 'development_disable_style_caching');
function development_disable_style_caching($tag){
  return str_replace(get_bloginfo('version'), time(), $tag);
}

add_action( 'wp_enqueue_scripts', 'strategy_assets' );
add_theme_support( 'post-thumbnails', array( 'post' ) );

show_admin_bar(false);


function custom_excerpt_length( $length ) {
    return 40; // заменить 20 на нужное количество слов
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Настройки темы',
        'menu_title'    => 'Глобальные настройки',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

add_filter('wpcf7_autop_or_not', '__return_false');









add_filter('tiny_mce_plugins', function ($plugins) {
  // Отключаем фильтр эмодзи (если он есть)
  $key = array_search('wpemoji', $plugins);
  if ($key !== false) {
    unset($plugins[$key]);
  }
  return $plugins;
});

add_action('template_redirect', 'disable_author_archives');
function disable_author_archives() {
    if (is_author()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
    }
}