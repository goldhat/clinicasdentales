<?php

add_action( 'after_setup_theme', 'servicioMenu' );
function servicioMenu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'servicio' ) );
}

add_action( 'wp_enqueue_scripts', 'servicioScripts' );
function servicioScripts() {
  wp_enqueue_style(
    'servicio-style',
    get_template_directory_uri() . '/style.css',
    false
  );
}
