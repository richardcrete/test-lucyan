<?php

/**
 * Inline CTA Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

?>

<div class="InlineCTA isComponent<?= get_field('background') ? ' isLight' : '' ?><?= get_field('position') ? ' isHigher' : '' ?>">
    <div class="container">
        <div class="InlineCTA-content">
            <h3 class="h3"><?= get_field('title') ?></h3>
            <a href="<?= get_field('link')['url'] ?>" target="<?= get_field('link')['target'] ?>"
               class="Button isSecondary isBorderRadius">
                <?php if (get_field('icon')) : ?>
                    <img src="<?= get_field('icon')["url"] ?>" alt="">
                <?php endif; ?>
                <?= get_field('link')['title'] ?>
            </a>
        </div>
    </div>
</div>