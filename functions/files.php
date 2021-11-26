<?php

function load_styles_and_script() {
    wp_enqueue_style( 'main', get_theme_file_uri('/dist/css/main.css'), [], '0.1' );
    wp_enqueue_script( 'app', get_theme_file_uri( '/dist/js/app.js' ), [], '0.1', true );

}

add_action( 'wp_enqueue_scripts', 'load_styles_and_script' );