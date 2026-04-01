<?php

$primaryMenuDesktop = get_field('menu_desktop_primary', 'options');
$secondaryMenuDesktop = get_field('menu_desktop_secondary', 'options');
$menuMobile = get_field('menu_mobile', 'options');
$icons = get_field('icons', 'options');

?>

<header class="Header">
    <div class="Header-content">
        <a class="Header-logo" href="<?= home_url() ?>">
            <img src="<?= get_template_directory_uri() ?>/src/assets/img/logo.png" alt="Logo">
        </a>
        <nav class="MenuMobile">
            <div class="MenuMobile-header">
                <a class="MenuMobile-icon" href="<?= home_url() ?>">
                    <img src="<?= get_template_directory_uri() ?>/src/assets/img/icon.png" alt="Icon">
                </a>
                <button class="MenuMobile-burger">
                    <div class="MenuMobile-iconOpen">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <span class="MenuMobile-textOpen">Menu</span>
                    <div class="MenuMobile-iconClose">
                        <div></div>
                        <div></div>
                    </div>
                    <span class="MenuMobile-textClose">Fermer</span>
                </button>
                <a href="<?= $icons['telephone']['url'] ?>" target="<?= $icons['telephone']['target'] ?>"
                   class="MenuMobile-tel">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15.559"
                         height="15.561" viewBox="0 0 15.559 15.561">
                        <g id="icone-telephone" transform="translate(0 0)">
                            <g id="Groupe_1386" data-name="Groupe 1386" transform="translate(0 0)">
                                <path id="Tracé_870" data-name="Tracé 870"
                                      d="M4.049,4.613,5.311,3.551a.377.377,0,0,0,.025-.561L2.456.11a.378.378,0,0,0-.534,0L.828,1.2A2.819,2.819,0,0,0,.059,3.77a14.8,14.8,0,0,0,4.288,7.442,14.877,14.877,0,0,0,7.443,4.292,2.832,2.832,0,0,0,2.566-.774l1.093-1.093a.385.385,0,0,0,0-.54L12.569,10.22a.4.4,0,0,0-.287-.11.377.377,0,0,0-.274.135l-1.062,1.266a1.074,1.074,0,0,1-1.165.334,5.845,5.845,0,0,1-.6-.232A10.344,10.344,0,0,1,6.132,9.428,10.289,10.289,0,0,1,3.947,6.375a5.872,5.872,0,0,1-.233-.6,1.073,1.073,0,0,1,.336-1.16Z"
                                      transform="translate(0 0)" fill="#edd7c3"/>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
            <ul class="MenuMobile-menu">
                <?php foreach ($menuMobile as $link): ?>
                    <li class="MenuMobile-item">
                        <a href="<?= $link['link']['url'] ?>" target="<?= $link['link']['target'] ?>">
                            <?= $link['link']['title'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="MenuMobile-footer">
                <a href="<?= $icons['email_address']['url'] ?>" target="<?= $icons['email_address']['target'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17"
                         height="13" viewBox="0 0 17 13">

                        <g id="icone-email" transform="translate(0.438 -0.198)">
                            <g id="Groupe_1390" data-name="Groupe 1390" transform="translate(-0.438 0.078)">
                                <path id="Tracé_873" data-name="Tracé 873"
                                      d="M7.038,1.026C9.351,2.985,13.41,6.431,14.6,7.506a.7.7,0,0,0,1.019,0c1.194-1.076,5.253-4.522,7.566-6.481a.351.351,0,0,0,.049-.485A1.394,1.394,0,0,0,22.136,0H8.091a1.394,1.394,0,0,0-1.1.541.351.351,0,0,0,.049.484"
                                      transform="translate(-6.367 -0.057)" fill="#edd7c3"/>
                                <path id="Tracé_874" data-name="Tracé 874"
                                      d="M16.651,80.444a.35.35,0,0,0-.374.051c-2.565,2.175-5.839,4.962-6.869,5.89a1.422,1.422,0,0,1-1.96,0C6.349,85.4,2.672,82.27.578,80.5A.351.351,0,0,0,0,80.763v8.83A1.406,1.406,0,0,0,1.4,91H15.45a1.406,1.406,0,0,0,1.4-1.4v-8.83a.351.351,0,0,0-.2-.319"
                                      transform="translate(0.319 -77.821)" fill="#edd7c3"/>
                            </g>
                        </g>
                    </svg>
                    <?= $icons['email_address']['title'] ?>
                </a>
                <a href="<?= $icons['alert']['url'] ?>" target="<?= $icons['alert']['target'] ?>">
                    <svg id="icone-cloche" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="14.241" height="17.089" viewBox="0 0 14.241 17.089">
                        <g id="Groupe_1392" data-name="Groupe 1392">
                            <path id="Tracé_875" data-name="Tracé 875"
                                  d="M13.8,12.043A4.769,4.769,0,0,1,12.1,8.394V6.408A4.988,4.988,0,0,0,7.833,1.481V.712a.712.712,0,0,0-1.424,0v.769A4.988,4.988,0,0,0,2.136,6.408V8.394a4.775,4.775,0,0,1-1.7,3.655,1.246,1.246,0,0,0,.81,2.192H13a1.246,1.246,0,0,0,.8-2.2"
                                  fill="#edd7c3"/>
                            <path id="Tracé_876" data-name="Tracé 876"
                                  d="M137.573,450.136A2.675,2.675,0,0,0,140.189,448h-5.232a2.674,2.674,0,0,0,2.616,2.136"
                                  transform="translate(-130.452 -433.047)" fill="#edd7c3"/>
                        </g>
                    </svg>
                    <?= $icons['alert']['title'] ?>
                </a>
            </div>
        </nav>
    </div>
    <nav class="Menu">
        <ul class="Menu-primary">
            <?php foreach ($primaryMenuDesktop as $link): ?>
                <li class="Menu-item">
                    <a href="<?= $link['link']['url'] ?>"
                       target="<?= $link['link']['target'] ?>"<?= $link['isButton'] ? 'class="Button isPrimaryLight isSmall"' : '' ?>>
                        <?= $link['link']['title'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <a class="Menu-logo" href="<?= home_url() ?>">
            <img src="<?= get_template_directory_uri() ?>/src/assets/img/logo-typo.png" alt="Logo">
        </a>
        <div class="Menu-right">
            <ul class="Menu-secondary">
                <?php foreach ($secondaryMenuDesktop as $link): ?>
                    <li class="Menu-item">
                        <a href="<?= $link['link']['url'] ?>"
                           target="<?= $link['link']['target'] ?>"<?= $link['is_button'] ? 'class="Button isPrimaryLight isSmall"' : '' ?>>
                            <?= $link['link']['title'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="Menu-tertiary">
                <li class="Menu-item">
                    <a href="<?= $icons['telephone']['url'] ?>" target="<?= $icons['telephone']['target'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="15.559" height="15.561" viewBox="0 0 15.559 15.561">
                            <g id="icone-telephone" transform="translate(0 0)">
                                <g id="Groupe_1386" data-name="Groupe 1386" transform="translate(0 0)">
                                    <path id="Tracé_870" data-name="Tracé 870"
                                          d="M4.049,4.613,5.311,3.551a.377.377,0,0,0,.025-.561L2.456.11a.378.378,0,0,0-.534,0L.828,1.2A2.819,2.819,0,0,0,.059,3.77a14.8,14.8,0,0,0,4.288,7.442,14.877,14.877,0,0,0,7.443,4.292,2.832,2.832,0,0,0,2.566-.774l1.093-1.093a.385.385,0,0,0,0-.54L12.569,10.22a.4.4,0,0,0-.287-.11.377.377,0,0,0-.274.135l-1.062,1.266a1.074,1.074,0,0,1-1.165.334,5.845,5.845,0,0,1-.6-.232A10.344,10.344,0,0,1,6.132,9.428,10.289,10.289,0,0,1,3.947,6.375a5.872,5.872,0,0,1-.233-.6,1.073,1.073,0,0,1,.336-1.16Z"
                                          transform="translate(0 0)" fill="#edd7c3"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="Menu-item">
                    <a href="mailto:agence@immo-waldhof.fr">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17"
                             height="13" viewBox="0 0 17 13">
                            <g id="icone-email" transform="translate(0.438 -0.198)">
                                <g id="Groupe_1390" data-name="Groupe 1390" transform="translate(-0.438 0.078)">
                                    <path id="Tracé_873" data-name="Tracé 873"
                                          d="M7.038,1.026C9.351,2.985,13.41,6.431,14.6,7.506a.7.7,0,0,0,1.019,0c1.194-1.076,5.253-4.522,7.566-6.481a.351.351,0,0,0,.049-.485A1.394,1.394,0,0,0,22.136,0H8.091a1.394,1.394,0,0,0-1.1.541.351.351,0,0,0,.049.484"
                                          transform="translate(-6.367 -0.057)" fill="#edd7c3"/>
                                    <path id="Tracé_874" data-name="Tracé 874"
                                          d="M16.651,80.444a.35.35,0,0,0-.374.051c-2.565,2.175-5.839,4.962-6.869,5.89a1.422,1.422,0,0,1-1.96,0C6.349,85.4,2.672,82.27.578,80.5A.351.351,0,0,0,0,80.763v8.83A1.406,1.406,0,0,0,1.4,91H15.45a1.406,1.406,0,0,0,1.4-1.4v-8.83a.351.351,0,0,0-.2-.319"
                                          transform="translate(0.319 -77.821)" fill="#edd7c3"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="Menu-item">
                    <a href="<?= $icons['alert']['url'] ?>" target="<?= $icons['alert']['target'] ?>">
                        <svg id="icone-cloche" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="14.241" height="17.089"
                             viewBox="0 0 14.241 17.089">
                            <g id="Groupe_1392" data-name="Groupe 1392">
                                <path id="Tracé_875" data-name="Tracé 875"
                                      d="M13.8,12.043A4.769,4.769,0,0,1,12.1,8.394V6.408A4.988,4.988,0,0,0,7.833,1.481V.712a.712.712,0,0,0-1.424,0v.769A4.988,4.988,0,0,0,2.136,6.408V8.394a4.775,4.775,0,0,1-1.7,3.655,1.246,1.246,0,0,0,.81,2.192H13a1.246,1.246,0,0,0,.8-2.2"
                                      fill="#edd7c3"/>
                                <path id="Tracé_876" data-name="Tracé 876"
                                      d="M137.573,450.136A2.675,2.675,0,0,0,140.189,448h-5.232a2.674,2.674,0,0,0,2.616,2.136"
                                      transform="translate(-130.452 -433.047)" fill="#edd7c3"/>
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>