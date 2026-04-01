<?php

/**
 * Services Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

?>

<?php $services = get_field('services') ?? []; ?>

<div class="Services">
    <div class="container">
        <div class="Services-header">
            <img class="Services-logo" src="<?= get_template_directory_uri() ?>/src/assets/img/icon.png" alt="icon">
            <h1 class="Services-title h1"><?= get_field('title') ?></h1>
            <h2 class="Services-subTitle h3"><?= get_field('sub_title') ?></h2>
        </div>
    </div>
    <ul class="Services-list">

        <?php foreach ($services as $service) : ?>
            <li class="Service">
                <div class="Service-container">
                    <div class="Service-title">
                        <h2 class="h2"><?= $service['title'] ?></h2>
                        <p class="Service-description"><?= $service['description'] ?></p>
                    </div>
                    <a href="<?= $service['link']['url'] ?>" target="<?= $service['link']['target'] ?>"
                       class="Service-link">
                        En savoir plus
                        <svg id="icone-big-arrow" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="90.709" height="56.454" viewBox="0 0 90.709 56.454">
                            <g id="Groupe_1369" data-name="Groupe 1369">
                                <line id="Ligne_80" data-name="Ligne 80" x2="90.411" transform="translate(0 28.227)"
                                      fill="none"
                                      stroke="#02496e" stroke-width="2"/>
                                <path id="Tracé_864" data-name="Tracé 864" d="M148.236.354l28.078,28.078L148.236,56.51"
                                      transform="translate(-85.902 -0.205)" fill="none" stroke="#02496e"
                                      stroke-width="2"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </li>
        <?php endforeach; ?>

    </ul>
</div>