<?php

class InlineCTA
{
    public static function getInlineCTA(): string
    {
        return '
            <div class="InlineCTA component isLight">
                <div class="container">
                <div class="InlineCTA-content">
                    <h3 class="h3">Je souhaite être informé par mail dès qu’un bien est mis en ligne</h3>
                    <a href="#" class="Button isSecondary isSmall">
                        <svg id="icone-cloche" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14.241" height="17.089" viewBox="0 0 14.241 17.089">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_1026" data-name="Rectangle 1026" width="14.241" height="17.089" fill="#edd7c3"/>
                                </clipPath>
                            </defs>
                            <g id="Groupe_1392" data-name="Groupe 1392" clip-path="url(#clip-path)">
                                <path id="Tracé_875" data-name="Tracé 875" d="M13.8,12.043A4.769,4.769,0,0,1,12.1,8.394V6.408A4.988,4.988,0,0,0,7.833,1.481V.712a.712.712,0,0,0-1.424,0v.769A4.988,4.988,0,0,0,2.136,6.408V8.394a4.775,4.775,0,0,1-1.7,3.655,1.246,1.246,0,0,0,.81,2.192H13a1.246,1.246,0,0,0,.8-2.2" fill="#edd7c3"/>
                                <path id="Tracé_876" data-name="Tracé 876" d="M137.573,450.136A2.675,2.675,0,0,0,140.189,448h-5.232a2.674,2.674,0,0,0,2.616,2.136" transform="translate(-130.452 -433.047)" fill="#edd7c3"/>
                            </g>
                        </svg>
                        Créer une alerte
                    </a>
                </div>
                </div>
            </div>
        ';
    }
}