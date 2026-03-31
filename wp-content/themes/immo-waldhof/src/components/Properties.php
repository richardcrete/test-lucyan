<?php

class Properties
{
    public static function getProperties(array $properties): string
    {
        $html = '<div class="Properties">
                    <div class="container">
                        <div class="Properties-header">
                            <div class="Properties-title h1">Nos derniers biens à la vente</div>
                            <h2 class="Properties-subTitle h3">' . count($properties) . ' annonces</h2>
                        </div>
                    </div>
                    <div class="Properties-container container">
                        <div class="Properties-slider swiper" data-mobile-space-between="18" data-desktop-space-between="32">
                            <div class="Properties-wrapper swiper-wrapper">';

            foreach ($properties as $property) {
                $html .= '<div class="Properties-slide swiper-slide">
                    <a href="#" class="Properties-card">
                        <div class="Properties-img">
                            <img src="/wp-content/uploads/2026/03/alm%20(5).jpg" alt="">
                            <div class="Properties-label">Maison à vendre</div>
                        </div>
                        <div class="Properties-content">
                            <div class="Properties-infos">
                                <div class="Properties-type">Maison à vendre</div>
                                <h3 class="Properties-name h3">Une maison 5 pièces pleine de charme</h3>
                                <p class="Properties-location">La Wantzenau</p>
                            </div>
                            <div class="Properties-data">
                                <span class="h6">6 pièces</span>
                                <span class="h6">250 m2</span>
                                <div class="Properties-price h5">889 500 €</div>
                            </div>
                        </div>
                    </a>
                </div>';
            }

        $html .= '          </div>
                        <div class="Properties-navigation">
                            <button class="swiper-button-prev">
                                <svg id="icone-big-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="90.709" height="56.454" viewBox="0 0 90.709 56.454">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_1016" data-name="Rectangle 1016" width="90.709" height="56.454" fill="none" stroke="#02496e" stroke-width="2"/>
                                        </clipPath>
                                    </defs>
                                    <g id="Groupe_1369" data-name="Groupe 1369">
                                        <line id="Ligne_80" data-name="Ligne 80" x2="90.411" transform="translate(0 28.227)" fill="none" stroke="#02496e" stroke-width="2"/>
                                        <path id="Tracé_864" data-name="Tracé 864" d="M148.236.354l28.078,28.078L148.236,56.51" transform="translate(-85.902 -0.205)" fill="none" stroke="#02496e" stroke-width="2"/>
                                    </g>
                                </svg>
                            </button>
                            <button class="swiper-button-next">
                                <svg id="icone-big-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="90.709" height="56.454" viewBox="0 0 90.709 56.454">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_1016" data-name="Rectangle 1016" width="90.709" height="56.454" fill="none" stroke="#02496e" stroke-width="2"/>
                                        </clipPath>
                                    </defs>
                                    <g id="Groupe_1369" data-name="Groupe 1369">
                                        <line id="Ligne_80" data-name="Ligne 80" x2="90.411" transform="translate(0 28.227)" fill="none" stroke="#02496e" stroke-width="2"/>
                                        <path id="Tracé_864" data-name="Tracé 864" d="M148.236.354l28.078,28.078L148.236,56.51" transform="translate(-85.902 -0.205)" fill="none" stroke="#02496e" stroke-width="2"/>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="container">
                        <div class="Properties-footer">
                            <a href="#" class="Button isSecondary isBorderRadius isMedium">Voir tous nos bien à la vente</a>
                        </div>
                    </div>
                </div>
            ';

        return $html;
    }
}