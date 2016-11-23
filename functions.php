<?php


/* add css */
function theme_styles() {
    wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

/* add JavaScript */
function theme_js() {
    wp_enqueue_script( 'global_js', get_template_directory_uri() . '/js/global.js', '','', true );
    // add condition to only pull home.js on home page
    wp_enqueue_script( 'home_js', get_template_directory_uri() . '/js/home.js', '', '', true );
    $wsd_home = array( 'template_url' => get_bloginfo('template_url') );
    wp_localize_script( 'home_js', 'wsd_home', $wsd_home );
    wp_enqueue_script( 'about_js', get_template_directory_uri() . '/js/about.js', '', '', true );
    wp_enqueue_script( 'photos_js', get_template_directory_uri() . '/js/photos.js', '', '', true );
    wp_enqueue_script( 'live_js', get_template_directory_uri() . '/js/live.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

/*==========================================
=            Widgets            =
==========================================*/
function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => ''
    ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the hompage');
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the hompage');
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the hompage');
?>
