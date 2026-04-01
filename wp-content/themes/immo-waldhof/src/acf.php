<?php

add_action('acf/init', 'register_acf_blocks');
function register_acf_blocks(): void
{
    acf_register_block_type([
        'name' => 'reviews',
        'title' => 'Avis',
        'description' => 'Avis Google',
        'icon' => array(
            'background' => '#fff',
            'foreground' => '#000',
            'src' => 'star-filled',
        ),
        'render_template' => get_template_directory() . '/template-parts/blocks/reviews.php',
        'enqueue_script' => get_template_directory_uri() . '/dist/app.js',
    ]);
}