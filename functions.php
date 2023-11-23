<?php

add_action( 'wp_enqueue_scripts', 'sunflower_child_enqueue_styles' );
function sunflower_child_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'sunflower-style' ),
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}

require_once 'functions/colors.php';
