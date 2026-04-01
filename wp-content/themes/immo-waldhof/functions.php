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