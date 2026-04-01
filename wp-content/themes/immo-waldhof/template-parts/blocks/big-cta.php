<?php

/**
 * Big CTA Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<div class="BigCTA isComponent<?= get_field('background') ? ' isLight' : '' ?><?= get_field('position') ? ' isHigher' : '' ?>">
    <div class="container">
        <div class="BigCTA-content">
            <div class="BigCTA-title">
                <h3 class="h3"><?= get_field('sub_title') ?></h3>
                <h2 class="h1"><?= get_field('title') ?></h2>
            </div>
            <a href="<?= get_field('link')['url'] ?>" target="<?= get_field('link')['target'] ?>" class="Button isTertiary isMedium isBorderRadius">
                <?php if (get_field('icon')) : ?>
                    <img src="<?= get_field('icon')["url"] ?>" alt="">
                <?php endif; ?>
                <?= get_field('link')['title'] ?>
            </a>
        </div>
    </div>
</div>