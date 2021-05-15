<?php
function wpdocs_create_book_tax_rewrite() {
    $args = [
        'label'        => 'Angilal',
        'public'       => true,
        'rewrite'      => true,
        'hierarchical' => true
    ];
    register_taxonomy( 'angilal', 'members', $args );
}

add_action( 'init', 'wpdocs_create_book_tax_rewrite', 0 );