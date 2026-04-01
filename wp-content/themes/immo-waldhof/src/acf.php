<?php

add_action('acf/init', 'register_acf_blocks');
function register_acf_blocks(): void
{

    acf_register_block_type([
        'name' => 'home-slider',
        'title' => 'Home Slider',
        'description' => 'Home Slider',
        'icon' => array(
            'background' => '#fff',
            'foreground' => '#000',
            'src' => 'slides',
        ),
        'render_template' => get_template_directory() . '/template-parts/blocks/home-slider.php',
    ]);

    acf_register_block_type([
        'name' => 'search-form',
        'title' => 'Search Form',
        'description' => 'Formulaire de recherche',
        'icon' => array(
            'background' => '#fff',
            'foreground' => '#000',
            'src' => 'forms',
        ),
        'render_template' => get_template_directory() . '/template-parts/blocks/search-form.php',
    ]);

    acf_register_block_type([
        'name' => 'services',
        'title' => 'Services',
        'description' => 'Services',
        'icon' => array(
            'background' => '#fff',
            'foreground' => '#000',
            'src' => 'admin-tools',
        ),
        'render_template' => get_template_directory() . '/template-parts/blocks/services.php',
    ]);

    acf_register_block_type([
        'name' => 'properties-slider',
        'title' => 'Slider Biens',
        'description' => 'Slider biens',
        'icon' => array(
            'background' => '#fff',
            'foreground' => '#000',
            'src' => 'home',
        ),
        'render_template' => get_template_directory() . '/template-parts/blocks/properties-slider.php',
    ]);

    acf_register_block_type([
        'name' => 'manifesto',
        'title' => 'Manifesto',
        'description' => 'Manifeste',
        'icon' => array(
            'background' => '#fff',
            'foreground' => '#000',
            'src' => 'learn-more',
        ),
        'render_template' => get_template_directory() . '/template-parts/blocks/manifesto.php',
    ]);

    acf_register_block_type([
        'name' => 'spacer',
        'title' => 'Spacer',
        'description' => 'Spacer',
        'icon' => array(
            'background' => '#fff',
            'foreground' => '#000',
            'src' => 'plus',
        ),
        'render_template' => get_template_directory() . '/template-parts/blocks/spacer.php',
    ]);

    acf_register_block_type([
        'name' => 'big-cta',
        'title' => 'Big CTA',
        'description' => 'Gros CTA',
        'icon' => array(
            'background' => '#fff',
            'foreground' => '#000',
            'src' => 'megaphone',
        ),
        'render_template' => get_template_directory() . '/template-parts/blocks/big-cta.php',
    ]);

    acf_register_block_type([
        'name' => 'inline-cta',
        'title' => 'Inline CTA',
        'description' => 'CTA en ligne',
        'icon' => array(
            'background' => '#fff',
            'foreground' => '#000',
            'src' => 'megaphone',
        ),
        'render_template' => get_template_directory() . '/template-parts/blocks/inline-cta.php',
    ]);

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
    ]);
}

add_action('acf/input/admin_enqueue_scripts', 'acf_admin_enqueue_scripts');
function acf_admin_enqueue_scripts(): void
{
    wp_enqueue_script('admin', get_template_directory_uri() . '/dist/admin.js');
}