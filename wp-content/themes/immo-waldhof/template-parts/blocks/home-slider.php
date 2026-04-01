<?php

/**
 * Home Slider Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

?>

<?php $images = get_field('images'); ?>

<div class="HomeSlider">
    <?php if (get_field('gradient')) : ?>
        <div class="HomeSlider-gradient"></div>
    <?php endif; ?>
    <div class="HomeSlider-container<?= get_field('loop') ? ' isLoop' : '' ?><?= count($images) > 1 ? ' swiper' : '' ?>"
         data-autoplay="<?= get_field('autoplay') ?? "2000" ?>">
        <div class="HomeSlider-wrapper<?= count($images) > 1 ? ' swiper-wrapper' : '' ?>">

            <?php foreach ($images as $image) : ?>
                <div class="HomeSlider-slide<?= count($images) > 1 ? ' swiper-slide' : '' ?>"
                     style="background-image: url('<?= $image["image"]["url"] ?>');">
                    <div class="HomeSlider-content"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>