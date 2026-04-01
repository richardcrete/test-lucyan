<!doctype html>
<html lang="fr" style="overflow-y: hidden;">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= get_the_title() . ' - ' . get_bloginfo('name') ?></title>
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri() ?>/src/assets/favicon/favicon-96x96.png"
          sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="<?= get_template_directory_uri() ?>/src/assets/favicon/favicon.svg"/>
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/src/assets/favicon/favicon.ico"/>
</head>

<body>
<div class="Loader">
    <div class="Loader-container">
        <div class="Loader-circle"></div>
    </div>

    <style>
        .Loader {
            position: relative;
            opacity: 1;
        }

        .Loader-container {
            position: fixed;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            z-index: 100;
            opacity: 1;
            transition: opacity 0.6s ease;
        }

        .Loader.isHidden .Loader-container {
            opacity: 0;
            pointer-events: none;
        }

        .Loader-circle {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            border: 9px solid #faf5f0;
            border-right-color: #967034;
            animation: loader 2s infinite linear;
        }

        @keyframes loader {
            to {
                transform: rotate(1turn);
            }
        }
    </style>
</div>

<?php
include('src/components/header.php');