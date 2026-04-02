<?php

include('vendor/autoload.php');
include('src/acf.php');

if (!is_admin()) {
    wp_enqueue_script('app', get_template_directory_uri() . '/dist/app.js');
}

function allow_svg_uploads($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'allow_svg_uploads');

function add_favicon_to_admin()
{
    echo '<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/src/assets/favicon/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="' . get_template_directory_uri() . '/src/assets/favicon/favicon.svg"/>
    <link rel="shortcut icon" href="' . get_template_directory_uri() . '/src/assets/favicon/favicon.ico"/>';
}

add_action('admin_head', 'add_favicon_to_admin');