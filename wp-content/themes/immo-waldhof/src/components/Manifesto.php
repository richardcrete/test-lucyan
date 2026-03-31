<?php

class Manifesto
{
    public static function getManifesto(bool $isLight = false): string
    {
        return '
            <div class="Manifesto isComponent' . ($isLight ? ' isLight' : '') . '">
                <div class="container">
                    <div class="Manifesto-header">
                        <div class="Manifesto-logo isMobile">
                            <img src="' . get_template_directory_uri() . '/src/assets/img/icon-blue.png" alt="Icon blue">
                        </div>
                        <div class="Manifesto-title">
                            <h3 class="h3">Votre parcours d’acquisition vous semble compliqué ?</h3>
                            <h2 class="h1">Notre équipe d’expertes vous accompagne</h2>
                        </div>
                        <div class="Manifesto-row">
                            <div class="Manifesto-logo">
                                <img src="' . get_template_directory_uri() . '/src/assets/img/icon-blue.png" alt="Icon blue">
                            </div>
                            <div class="Manifesto-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae congue arcu. Phasellus ullamcorper purus enim, non mollis libero facilisis vitae. Donec risus nulla, suscipit quis libero in, porta accumsan nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent a augue vitae turpis interdum malesuada. Phasellus ultricies mi eu arcu porta auctor. Donec auctor euismod malesuada. Nulla malesuada odio a neque posuere, sit amet imperdiet mi vulputate. Nulla luctus lectus nibh, ut facilisis risus ultrices eget. Integer id est id orci lobortis efficitur. Donec id venenatis lorem, nec mollis nulla. Integer malesuada, nibh id scelerisque dapibus, libero quam condimentum neque, non placerat arcu eros et eros. Quisque accumsan,</p>
                                <a href="#" class="Button isSecondary isMedium isBorderRadius">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Manifesto-gallery isMobile">
                    <div class="Manifesto-item isAlignLeft">
                        <div class="Manifesto-box">
                            <img id="Manifesto-img-1" src="' . get_template_directory_uri() . '/src/assets/img/manifesto-gallery-item-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="Manifesto-item isAlignRight">
                        <div class="Manifesto-box">
                            <img id="Manifesto-img-2" src="' . get_template_directory_uri() . '/src/assets/img/manifesto-gallery-item-3.jpg" alt="">
                            <div class="Manifesto-card">
                                <div class="Manifesto-icon">
                                    <svg id="icone-connaissance-marche" xmlns="http://www.w3.org/2000/svg" width="25.967" height="25.967" viewBox="0 0 25.967 25.967">
                                        <g id="Groupe_1411" data-name="Groupe 1411">
                                            <g id="Groupe_1410" data-name="Groupe 1410">
                                                <path id="Tracé_878" data-name="Tracé 878" d="M15.824,0a10.14,10.14,0,0,0-8.36,4.406l-2.08-2.08A1.014,1.014,0,0,0,3.949,3.76l2.5,2.5a10.128,10.128,0,0,0,1.521,10.3L.3,24.236A1.014,1.014,0,1,0,1.731,25.67l7.676-7.676A10.142,10.142,0,1,0,15.824,0Zm0,18.258A8.116,8.116,0,0,1,8.039,7.851l2,2a1.014,1.014,0,0,0,1.435,0l1.311-1.311,3.637,3.637h-.594a1.014,1.014,0,0,0,0,2.029h3.043a1.017,1.017,0,0,0,1.014-1.014V10.143a1.014,1.014,0,1,0-2.029,0v.594L13.5,6.383a1.014,1.014,0,0,0-1.435,0L10.752,7.695,8.928,5.871a8.114,8.114,0,1,1,6.9,12.388Z" transform="translate(0)" fill="#785d32"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="Manifesto-content">
                                    <h5 class="h5">Connaissance du marché</h5>
                                    <p>Nous évaluons chaque bien selon sa valeur réelle et les tendances locales actuelles.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Manifesto-item isAlignLeft">
                        <div class="Manifesto-box">
                            <div class="Manifesto-card">
                                <div class="Manifesto-icon">
                                    <svg id="icone-accompagnement" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_1028" data-name="Rectangle 1028" width="24" height="24" fill="#785d32"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Groupe_1408" data-name="Groupe 1408">
                                            <path id="Tracé_877" data-name="Tracé 877" d="M20.93,7.814h-.279V7.535a4.185,4.185,0,0,0-4.186-4.186H8.372V3.07A3.069,3.069,0,0,0,5.3,0H3.07A3.07,3.07,0,0,0,0,3.07V5.3a3.069,3.069,0,0,0,3.07,3.07H5.3A3.069,3.069,0,0,0,8.372,5.3V5.023h8.093a2.512,2.512,0,0,1,2.512,2.512v.279H18.7a3.069,3.069,0,0,0-3.07,3.07v.279H7.535a4.185,4.185,0,0,0-4.186,4.186v.279H3.07A3.069,3.069,0,0,0,0,18.7V20.93A3.069,3.069,0,0,0,3.07,24H5.3a3.069,3.069,0,0,0,3.07-3.07v-.279h4.956l-.8.8a.837.837,0,0,0,1.183,1.183l2.232-2.232a.833.833,0,0,0,.1-.126l.008-.012q.018-.028.034-.057l.006-.01c.011-.021.022-.043.031-.066l0,0v0c.009-.023.017-.045.024-.068l0-.014q.009-.032.016-.065l0-.009a.836.836,0,0,0,.015-.155s0,0,0,0q0-.036,0-.072V19.73a.839.839,0,0,0-.029-.149l0-.015c-.006-.019-.012-.037-.019-.055l-.008-.02c-.008-.02-.017-.04-.027-.059l0-.009c-.011-.022-.024-.043-.037-.063l-.012-.018q-.016-.023-.034-.046l-.014-.017c-.016-.02-.033-.039-.051-.057h0L13.708,16.99a.837.837,0,0,0-1.183,1.183l.8.8H8.372V18.7a3.069,3.069,0,0,0-3.07-3.07H5.023v-.279a2.512,2.512,0,0,1,2.512-2.512h8.093v.279a3.069,3.069,0,0,0,3.07,3.07H20.93A3.069,3.069,0,0,0,24,13.116V10.884a3.069,3.069,0,0,0-3.07-3.07M6.7,5.3A1.4,1.4,0,0,1,5.3,6.7H3.07a1.4,1.4,0,0,1-1.4-1.4V3.07a1.4,1.4,0,0,1,1.4-1.4H5.3a1.4,1.4,0,0,1,1.4,1.4Zm0,13.4v1.116h0V20.93a1.4,1.4,0,0,1-1.4,1.4H3.07a1.4,1.4,0,0,1-1.4-1.4V18.7a1.4,1.4,0,0,1,1.4-1.4H5.3a1.4,1.4,0,0,1,1.4,1.4m15.628-5.581a1.4,1.4,0,0,1-1.4,1.4H18.7a1.4,1.4,0,0,1-1.4-1.4V10.884a1.4,1.4,0,0,1,1.4-1.4H20.93a1.4,1.4,0,0,1,1.4,1.4Z" fill="#785d32" fill-rule="evenodd"/>
                                        </g>
                                    </svg>

                                </div>
                                <div class="Manifesto-content">
                                    <h5 class="h5">Accompagnement complet</h5>
                                    <p>De l’estimation à la signature, on vous guide à chaque étape de votre projet immobilier.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Manifesto-item isAlignRight">
                        <div class="Manifesto-box">
                            <div class="Manifesto-card">
                                <div class="Manifesto-icon">
                                    <svg id="icone-engagement" xmlns="http://www.w3.org/2000/svg" width="23.57" height="30.686" viewBox="0 0 23.57 30.686">
                                        <path id="Tracé_879" data-name="Tracé 879" d="M80.9,16.779l2.037-2.005-.967-2.689L82.936,9.4,80.9,7.391l-.3-2.841-2.7-.922L76.4,1.194l-2.838.343L71.151,0,68.743,1.537l-2.838-.343-1.5,2.433-2.7.922-.3,2.841L59.366,9.4l.968,2.689-.968,2.689L61.4,16.779l.3,2.842,1.5.512-2.573,8.042,4.4-.242,3.446,2.754,2.184-6.826.485.31.485-.31,2.184,6.826,3.446-2.754,4.4.242L79.1,20.132l1.5-.512ZM67.564,27.649,65.622,26.1l-2.481.136,1.631-5.1,1.133,1.839,2.838-.343.353.226ZM76.68,26.1l-1.941,1.551-1.533-4.791.353-.226,2.838.343,1.134-1.839,1.631,5.1Zm2.251-7.809-2.227.76-1.234,2-2.334-.282-1.983,1.266-1.983-1.266-2.334.282-1.234-2-2.227-.76-.247-2.339L61.449,14.3l.8-2.214-.8-2.214,1.676-1.65.247-2.339,2.227-.76,1.234-2,2.334.282,1.983-1.266L73.134,3.4l2.334-.282,1.234,2,2.228.76.247,2.339,1.676,1.65-.8,2.214.8,2.214-1.676,1.65Z" transform="translate(-59.366 0)" fill="#785d32"/>
                                        <path id="Tracé_880" data-name="Tracé 880" d="M146.159,84.791a7,7,0,1,0,7,7A7.011,7.011,0,0,0,146.159,84.791Zm0,12.206a5.2,5.2,0,1,1,5.2-5.2A5.209,5.209,0,0,1,146.159,97Z" transform="translate(-134.374 -79.709)" fill="#785d32"/>
                                    </svg>
                                </div>
                                <div class="Manifesto-content">
                                    <h5 class="h5">Engagement responsable</h5>
                                    <p>Nous plaçons l’humain et la transparence au cœur de chaque projet immobilier que nous menons.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Manifesto-item isAlignRight">
                        <div class="Manifesto-box">
                            <img id="Manifesto-img-3" src="' . get_template_directory_uri() . '/src/assets/img/manifesto-gallery-item-1.jpg" alt="">
                            <img id="Manifesto-img-4" src="' . get_template_directory_uri() . '/src/assets/img/manifesto-gallery-item-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="Manifesto-gallery">
                    <div class="Manifesto-item">
                        <div class="Manifesto-box">
                            <img id="Manifesto-img-5" src="' . get_template_directory_uri() . '/src/assets/img/manifesto-gallery-item-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="Manifesto-item">
                        <div class="Manifesto-box">
                            <img id="Manifesto-img-6" src="' . get_template_directory_uri() . '/src/assets/img/manifesto-gallery-item-2.jpg" alt="">
                            <div class="Manifesto-card">
                                <div class="Manifesto-icon">
                                    <svg id="icone-accompagnement" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_1028" data-name="Rectangle 1028" width="24" height="24" fill="#785d32"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Groupe_1408" data-name="Groupe 1408">
                                            <path id="Tracé_877" data-name="Tracé 877" d="M20.93,7.814h-.279V7.535a4.185,4.185,0,0,0-4.186-4.186H8.372V3.07A3.069,3.069,0,0,0,5.3,0H3.07A3.07,3.07,0,0,0,0,3.07V5.3a3.069,3.069,0,0,0,3.07,3.07H5.3A3.069,3.069,0,0,0,8.372,5.3V5.023h8.093a2.512,2.512,0,0,1,2.512,2.512v.279H18.7a3.069,3.069,0,0,0-3.07,3.07v.279H7.535a4.185,4.185,0,0,0-4.186,4.186v.279H3.07A3.069,3.069,0,0,0,0,18.7V20.93A3.069,3.069,0,0,0,3.07,24H5.3a3.069,3.069,0,0,0,3.07-3.07v-.279h4.956l-.8.8a.837.837,0,0,0,1.183,1.183l2.232-2.232a.833.833,0,0,0,.1-.126l.008-.012q.018-.028.034-.057l.006-.01c.011-.021.022-.043.031-.066l0,0v0c.009-.023.017-.045.024-.068l0-.014q.009-.032.016-.065l0-.009a.836.836,0,0,0,.015-.155s0,0,0,0q0-.036,0-.072V19.73a.839.839,0,0,0-.029-.149l0-.015c-.006-.019-.012-.037-.019-.055l-.008-.02c-.008-.02-.017-.04-.027-.059l0-.009c-.011-.022-.024-.043-.037-.063l-.012-.018q-.016-.023-.034-.046l-.014-.017c-.016-.02-.033-.039-.051-.057h0L13.708,16.99a.837.837,0,0,0-1.183,1.183l.8.8H8.372V18.7a3.069,3.069,0,0,0-3.07-3.07H5.023v-.279a2.512,2.512,0,0,1,2.512-2.512h8.093v.279a3.069,3.069,0,0,0,3.07,3.07H20.93A3.069,3.069,0,0,0,24,13.116V10.884a3.069,3.069,0,0,0-3.07-3.07M6.7,5.3A1.4,1.4,0,0,1,5.3,6.7H3.07a1.4,1.4,0,0,1-1.4-1.4V3.07a1.4,1.4,0,0,1,1.4-1.4H5.3a1.4,1.4,0,0,1,1.4,1.4Zm0,13.4v1.116h0V20.93a1.4,1.4,0,0,1-1.4,1.4H3.07a1.4,1.4,0,0,1-1.4-1.4V18.7a1.4,1.4,0,0,1,1.4-1.4H5.3a1.4,1.4,0,0,1,1.4,1.4m15.628-5.581a1.4,1.4,0,0,1-1.4,1.4H18.7a1.4,1.4,0,0,1-1.4-1.4V10.884a1.4,1.4,0,0,1,1.4-1.4H20.93a1.4,1.4,0,0,1,1.4,1.4Z" fill="#785d32" fill-rule="evenodd"/>
                                        </g>
                                    </svg>

                                </div>
                                <div class="Manifesto-content">
                                    <h5 class="h5">Accompagnement complet</h5>
                                    <p>De l’estimation à la signature, on vous guide à chaque étape de votre projet immobilier.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Manifesto-item">
                        <div class="Manifesto-box">
                            <img id="Manifesto-img-7" src="' . get_template_directory_uri() . '/src/assets/img/manifesto-gallery-item-5.jpg" alt="">
                        </div>
                    </div>
                    <div class="Manifesto-item">
                        <div class="Manifesto-box">
                            <div class="Manifesto-card">
                                <div class="Manifesto-icon">
                                    <svg id="icone-connaissance-marche" xmlns="http://www.w3.org/2000/svg" width="25.967" height="25.967" viewBox="0 0 25.967 25.967">
                                        <g id="Groupe_1411" data-name="Groupe 1411">
                                            <g id="Groupe_1410" data-name="Groupe 1410">
                                                <path id="Tracé_878" data-name="Tracé 878" d="M15.824,0a10.14,10.14,0,0,0-8.36,4.406l-2.08-2.08A1.014,1.014,0,0,0,3.949,3.76l2.5,2.5a10.128,10.128,0,0,0,1.521,10.3L.3,24.236A1.014,1.014,0,1,0,1.731,25.67l7.676-7.676A10.142,10.142,0,1,0,15.824,0Zm0,18.258A8.116,8.116,0,0,1,8.039,7.851l2,2a1.014,1.014,0,0,0,1.435,0l1.311-1.311,3.637,3.637h-.594a1.014,1.014,0,0,0,0,2.029h3.043a1.017,1.017,0,0,0,1.014-1.014V10.143a1.014,1.014,0,1,0-2.029,0v.594L13.5,6.383a1.014,1.014,0,0,0-1.435,0L10.752,7.695,8.928,5.871a8.114,8.114,0,1,1,6.9,12.388Z" transform="translate(0)" fill="#785d32"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="Manifesto-content">
                                    <h5 class="h5">Connaissance du marché</h5>
                                    <p>Nous évaluons chaque bien selon sa valeur réelle et les tendances locales actuelles.</p>
                                </div>
                            </div>
                            <div class="Manifesto-box isRow">
                                <img id="Manifesto-img-8" src="' . get_template_directory_uri() . '/src/assets/img/manifesto-gallery-item-4.jpg" alt="">
                                <div class="Manifesto-card">
                                    <div class="Manifesto-icon">
                                        <svg id="icone-engagement" xmlns="http://www.w3.org/2000/svg" width="23.57" height="30.686" viewBox="0 0 23.57 30.686">
                                            <path id="Tracé_879" data-name="Tracé 879" d="M80.9,16.779l2.037-2.005-.967-2.689L82.936,9.4,80.9,7.391l-.3-2.841-2.7-.922L76.4,1.194l-2.838.343L71.151,0,68.743,1.537l-2.838-.343-1.5,2.433-2.7.922-.3,2.841L59.366,9.4l.968,2.689-.968,2.689L61.4,16.779l.3,2.842,1.5.512-2.573,8.042,4.4-.242,3.446,2.754,2.184-6.826.485.31.485-.31,2.184,6.826,3.446-2.754,4.4.242L79.1,20.132l1.5-.512ZM67.564,27.649,65.622,26.1l-2.481.136,1.631-5.1,1.133,1.839,2.838-.343.353.226ZM76.68,26.1l-1.941,1.551-1.533-4.791.353-.226,2.838.343,1.134-1.839,1.631,5.1Zm2.251-7.809-2.227.76-1.234,2-2.334-.282-1.983,1.266-1.983-1.266-2.334.282-1.234-2-2.227-.76-.247-2.339L61.449,14.3l.8-2.214-.8-2.214,1.676-1.65.247-2.339,2.227-.76,1.234-2,2.334.282,1.983-1.266L73.134,3.4l2.334-.282,1.234,2,2.228.76.247,2.339,1.676,1.65-.8,2.214.8,2.214-1.676,1.65Z" transform="translate(-59.366 0)" fill="#785d32"/>
                                            <path id="Tracé_880" data-name="Tracé 880" d="M146.159,84.791a7,7,0,1,0,7,7A7.011,7.011,0,0,0,146.159,84.791Zm0,12.206a5.2,5.2,0,1,1,5.2-5.2A5.209,5.209,0,0,1,146.159,97Z" transform="translate(-134.374 -79.709)" fill="#785d32"/>
                                        </svg>
                                    </div>
                                    <div class="Manifesto-content">
                                        <h5 class="h5">Engagement responsable</h5>
                                        <p>Nous plaçons l’humain et la transparence au cœur de chaque projet immobilier que nous menons.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Manifesto-item">
                        <div class="Manifesto-box">
                            <img id="Manifesto-img-9" src="' . get_template_directory_uri() . '/src/assets/img/manifesto-gallery-item-6.jpg" alt="">
                        </div>
                    </div>
                </div>
           </div>
        ';
    }
}