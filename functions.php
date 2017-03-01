<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function wpdocs_theme_setup() {
    add_image_size( 'slider_image', 910, 435, true ); // (cropped) true=>wycina dokladnie do 910x435; nie skaluje!
}
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
