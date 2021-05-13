<?php

require_once("includes/custom-post-types.php");

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'apprentice-style', get_stylesheet_uri() ); //style.css file-iig oruulj baina
    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

// echo get_stylesheet_uri();
// echo "<hr>";
// echo get_template_directory_uri();


?>