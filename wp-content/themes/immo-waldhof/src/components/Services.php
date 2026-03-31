<?php

class Services
{
    public static function getServices(array $services): string
    {
        $html = '
            <div class="Services">
                <div class="container">
                    <div class="Services-header">
                        <img class="Services-logo" src="' . get_template_directory_uri() . '/src/assets/img/icon.png" alt="icon">
                        <h1 class="Services-title h1">Votre projet immobilier prend racine ici.</h1>
                        <h2 class="Services-subTitle h3">Confiez-nous votre bien</h2>
                    </div>
                </div>
                <ul class="Services-list">
        ';

        foreach ($services as $service) {
            $html .= '
                <li class="Service">
                    <div class="Service-container">
                        <div class="Service-title">
                            <h2 class="h2">' . $service["title"] . '</h2>
                            <p class="Service-description">' . $service["description"] . '</p>
                        </div>
                        <a href="' . $service["link"] . '" class="Service-link">
                            En savoir plus
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
                        </a>
                    </div>
                </li>
            ';
        }

        $html .= '
                </ul>
            </div>
        ';

        return $html;
    }
}