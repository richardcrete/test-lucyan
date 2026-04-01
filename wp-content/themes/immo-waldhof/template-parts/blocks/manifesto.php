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

<?php $cards = get_field('cards'); ?>

<div class="Manifesto isComponent<?= get_field('background') ? ' isLight' : '' ?>">
    <div class="container">
        <div class="Manifesto-header">
            <div class="Manifesto-logo isMobile">
                <img src="<?= get_template_directory_uri() ?>/src/assets/img/icon-blue.png" alt="Icon blue">
            </div>
            <div class="Manifesto-title">
                <h3 class="h3"><?= get_field('sub_title') ?></h3>
                <h2 class="h1"><?= get_field('title') ?></h2>
            </div>
            <div class="Manifesto-row">
                <div class="Manifesto-logo">
                    <img src="<?= get_template_directory_uri() ?>/src/assets/img/icon-blue.png" alt="Icon blue">
                </div>
                <div class="Manifesto-description">
                    <p><?= get_field('description') ?></p>
                    <?php if(get_field('cta_link')['url']) : ?>
                        <a href="<?= get_field('cta_link')['url'] ?>" target="<?= get_field('cta_link')['target'] ?>"
                           class="Button isSecondary isMedium isBorderRadius"><?= get_field('cta_link')['title'] ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="Manifesto-gallery isMobile">
        <div class="Manifesto-item isAlignLeft">
            <div class="Manifesto-box">
                <img id="Manifesto-img-1"
                     src="<?= get_template_directory_uri() ?>/src/assets/img/manifesto-gallery-item-2.jpg" alt="">
            </div>
        </div>
        <div class="Manifesto-item isAlignRight">
            <div class="Manifesto-box">
                <img id="Manifesto-img-2"
                     src="<?= get_template_directory_uri() ?>/src/assets/img/manifesto-gallery-item-3.jpg" alt="">
                <div class="Manifesto-card">
                    <div class="Manifesto-icon">
                        <img src="<?= $cards[0]['card']['icon']['url'] ?>" alt="<?= $cards[0]['card']['icon']['alt'] ?>">
                    </div>
                    <div class="Manifesto-content">
                        <h5 class="h5"><?= $cards[0]['card']['title'] ?></h5>
                        <p><?= $cards[0]['card']['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="Manifesto-item isAlignLeft">
            <div class="Manifesto-box">
                <div class="Manifesto-card">
                    <div class="Manifesto-icon">
                        <img src="<?= $cards[1]['card']['icon']['url'] ?>" alt="<?= $cards[1]['card']['icon']['alt'] ?>">
                    </div>
                    <div class="Manifesto-content">
                        <h5 class="h5"><?= $cards[1]['card']['title'] ?></h5>
                        <p><?= $cards[1]['card']['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="Manifesto-item isAlignRight">
            <div class="Manifesto-box">
                <div class="Manifesto-card">
                    <div class="Manifesto-icon">
                        <img src="<?= $cards[2]['card']['icon']['url'] ?>" alt="<?= $cards[2]['card']['icon']['alt'] ?>">
                    </div>
                    <div class="Manifesto-content">
                        <h5 class="h5"><?= $cards[2]['card']['title'] ?></h5>
                        <p><?= $cards[2]['card']['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="Manifesto-item isAlignRight">
            <div class="Manifesto-box">
                <img id="Manifesto-img-3"
                     src="<?= get_template_directory_uri() ?>/src/assets/img/manifesto-gallery-item-1.jpg" alt="">
                <img id="Manifesto-img-4"
                     src="<?= get_template_directory_uri() ?>/src/assets/img/manifesto-gallery-item-4.jpg" alt="">
            </div>
        </div>
    </div>






    <div class="Manifesto-gallery">
        <div class="Manifesto-item">
            <div class="Manifesto-box">
                <img id="Manifesto-img-5"
                     src="<?= get_template_directory_uri() ?>/src/assets/img/manifesto-gallery-item-3.jpg" alt="">
            </div>
        </div>
        <div class="Manifesto-item">
            <div class="Manifesto-box">
                <img id="Manifesto-img-6"
                     src="<?= get_template_directory_uri() ?>/src/assets/img/manifesto-gallery-item-2.jpg" alt="">
                <div class="Manifesto-card">
                    <div class="Manifesto-icon">
                        <img src="<?= $cards[1]['card']['icon']['url'] ?>" alt="<?= $cards[1]['card']['icon']['alt'] ?>">
                    </div>
                    <div class="Manifesto-content">
                        <h5 class="h5"><?= $cards[1]['card']['title'] ?></h5>
                        <p><?= $cards[1]['card']['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="Manifesto-item">
            <div class="Manifesto-box">
                <img id="Manifesto-img-7"
                     src="<?= get_template_directory_uri() ?>/src/assets/img/manifesto-gallery-item-5.jpg" alt="">
            </div>
        </div>
        <div class="Manifesto-item">
            <div class="Manifesto-box">
                <div class="Manifesto-card">
                    <div class="Manifesto-icon">
                        <img src="<?= $cards[0]['card']['icon']['url'] ?>" alt="<?= $cards[0]['card']['icon']['alt'] ?>">
                    </div>
                    <div class="Manifesto-content">
                        <h5 class="h5"><?= $cards[0]['card']['title'] ?></h5>
                        <p><?= $cards[0]['card']['description'] ?></p>
                    </div>
                </div>
                <div class="Manifesto-box isRow">
                    <img id="Manifesto-img-8"
                         src="<?= get_template_directory_uri() ?>/src/assets/img/manifesto-gallery-item-4.jpg" alt="">
                    <div class="Manifesto-card">
                        <div class="Manifesto-icon">
                            <img src="<?= $cards[2]['card']['icon']['url'] ?>" alt="<?= $cards[2]['card']['icon']['alt'] ?>">
                        </div>
                        <div class="Manifesto-content">
                            <h5 class="h5"><?= $cards[2]['card']['title'] ?></h5>
                            <p><?= $cards[2]['card']['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Manifesto-item">
            <div class="Manifesto-box">
                <img id="Manifesto-img-9"
                     src="<?= get_template_directory_uri() ?>/src/assets/img/manifesto-gallery-item-6.jpg" alt="">
            </div>
        </div>
    </div>
</div>