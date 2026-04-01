<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= get_the_title() . ' - ' . get_bloginfo('name') ?></title><link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?= get_template_directory_uri() ?>/src/assets/favicon/favicon.svg"/>
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/src/assets/favicon/favicon.ico" />
</head>

<body>

<?php
include('src/components/header.php');