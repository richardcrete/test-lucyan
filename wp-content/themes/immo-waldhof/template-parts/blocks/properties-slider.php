<?php

/**
 * Properties Slider Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

?>

<?php $properties = get_field('properties') === "" ? [] : get_field('properties'); ?>


<?php
$properties = [];
if (get_field('properties') === "") {
    $properties = new WP_Query([
            'post_type' => 'property',
            'posts_per_page' => 10,
            'status' => 'publish',
            'orderby' => 'modified',
    ])->get_posts();
} else {
    $properties = get_field('properties');
}

?>

<div class="Properties isComponent">
    <div class="container">
        <div class="Properties-header">
            <div class="Properties-title h1"><?= get_field('title') ?></div>
            <h2 class="Properties-subTitle h3">
                <?= count($properties) ?> annonce<?= count($properties) > 1 ? 's' : '' ?>
            </h2>
        </div>
    </div>
    <div class="Properties-container container">
        <div class="Properties-slider<?= count($properties) > 1 ? ' swiper' : '' ?>" data-mobile-space-between="18"
             data-desktop-space-between="32">
            <div class="Properties-wrapper<?= count($properties) > 1 ? ' swiper-wrapper' : '' ?>">

                <?php foreach ($properties as $property) : ?>
                    <?php if ($property instanceof WP_POST) : ?>
                        <div class="Properties-slide<?= count($properties) > 1 ? ' swiper-slide' : '' ?>">
                            <a href="<?= get_permalink($property) ?>" class="Properties-card">
                                <div class="Properties-img">
                                    <img src="<?= get_field('image', $property->ID)["url"] ?>"
                                         alt="<?= get_field('image', $property->ID)["url"] ?>">
                                    <?php if (get_field('label', $property->ID)) : ?>
                                        <div class="Properties-label"><?= get_field('label', $property->ID) ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="Properties-content">
                                    <div class="Properties-infos">
                                        <div class="Properties-type"><?= get_field('type', $property->ID) ?></div>
                                        <h3 class="Properties-name h3"><?= $property->post_title ?></h3>
                                        <p class="Properties-location"><?= get_field('location', $property->ID) ?></p>
                                    </div>
                                    <div class="Properties-data">
                                        <?php if (get_field('rooms', $property->ID)) : ?>
                                            <span class="h6"><?= get_field('rooms', $property->ID) ?> pièce<?= get_field('rooms', $property->ID) > 1 ? 's' : '' ?></span>
                                        <?php endif; ?>
                                        <span class="h6"><?= get_field('area', $property->ID) ?> m²</span>
                                        <div class="Properties-price"><?= get_field('price', $property->ID) ?>
                                            €<?= str_ends_with(get_field('type', $property->ID), 'louer') ? ' C.C.' : '' ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php if (count($properties) > 1) : ?>
                <div class="Properties-navigation">
                    <button class="swiper-button-prev">
                        <svg id="icone-big-arrow" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="90.709" height="56.454"
                             viewBox="0 0 90.709 56.454">
                            <g id="Groupe_1369" data-name="Groupe 1369">
                                <line id="Ligne_80" data-name="Ligne 80" x2="90.411"
                                      transform="translate(0 28.227)"
                                      fill="none" stroke="#02496e" stroke-width="2"/>
                                <path id="Tracé_864" data-name="Tracé 864"
                                      d="M148.236.354l28.078,28.078L148.236,56.51"
                                      transform="translate(-85.902 -0.205)" fill="none" stroke="#02496e"
                                      stroke-width="2"/>
                            </g>
                        </svg>
                    </button>
                    <button class="swiper-button-next">
                        <svg id="icone-big-arrow" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="90.709" height="56.454"
                             viewBox="0 0 90.709 56.454">
                            <g id="Groupe_1369" data-name="Groupe 1369">
                                <line id="Ligne_80" data-name="Ligne 80" x2="90.411"
                                      transform="translate(0 28.227)"
                                      fill="none" stroke="#02496e" stroke-width="2"/>
                                <path id="Tracé_864" data-name="Tracé 864"
                                      d="M148.236.354l28.078,28.078L148.236,56.51"
                                      transform="translate(-85.902 -0.205)" fill="none" stroke="#02496e"
                                      stroke-width="2"/>
                            </g>
                        </svg>
                    </button>
                </div>
            <?php endif; ?>
        </div>

        <?php if (get_field('cta_link')) : ?>
            <div class="container">
                <div class="Properties-footer">
                    <a href="<?= get_field('cta_link')['url'] ?>"
                       target="<?= get_field('cta_link')['target'] ?>"
                       class="Button isSecondary isBorderRadius isMedium"><?= get_field('cta_link')['title'] ?></a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>