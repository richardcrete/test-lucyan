<?php

include('vendor/autoload.php');

if (!is_admin()) {
    wp_enqueue_script('app', get_template_directory_uri() . '/dist/app.js');
}
