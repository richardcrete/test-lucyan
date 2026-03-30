<?php

class Footer
{
    public static function getFooter(): string
    {
        return '
            <footer class="Footer">
                <div class="container">
                    <div class="Footer-logo">
                        <a  href="' . home_url() . '">
                            <img src="' . get_template_directory_uri() . '/src/assets/img/logo-creme.png" alt="logo">
                        </a>
                    </div>
                    <div class="Footer-content">
                        <div class="Footer-left">
                            <div class="Footer-contact">
                                <div class="Footer-address">
                                    Immobilière du waldhof<br>28 faubourg du Capitaine d’Alençon<br>67610 LA WANTZENAU
                                </div>
                                <div class="Footer-facebook">
                                    Suivez-nous sur <a href="https://www.facebook.com/immobiliereduwaldhof/">Facebook</a>
                                </div>
                            </div>
                            <div class="Footer-buttons">
                                <a href="#" class="Button isBorderRadius isMedium isSecondaryLight">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.238" height="20.238" viewBox="0 0 20.238 20.238">
                                        <g id="icone-itineraire" transform="translate(0 0.001)">
                                            <g id="directions" transform="translate(0 -0.001)">
                                                <path id="Tracé_882" data-name="Tracé 882" d="M19.935,9.41,10.827.3h0A.978.978,0,0,0,9.411.3L.3,9.41a.978.978,0,0,0,0,1.417l9.107,9.107h0a.978.978,0,0,0,1.417,0l9.107-9.107A.978.978,0,0,0,19.935,9.41Zm-7.792,3.238v-2.53H8.1v3.036H6.071V9.106A.956.956,0,0,1,7.083,8.094h5.06V5.565l3.542,3.542Z" transform="translate(0 0.001)" fill="#00497e"/>
                                            </g>
                                        </g>
                                    </svg>
                                    Voir l\'itinéraire
                                </a>
                                <a href="mailto:agence@immo-waldhof.fr" class="Button isMedium isBorderRadius isSecondaryLight">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="13" viewBox="0 0 17 13">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_1025" data-name="Rectangle 1025" width="17" height="13" transform="translate(0 0.12)" fill="#edd7c3"/>
                                            </clipPath>
                                        </defs>
                                        <g id="icone-email" transform="translate(0.438 -0.198)">
                                            <g id="Groupe_1390" data-name="Groupe 1390" transform="translate(-0.438 0.078)" clip-path="url(#clip-path)">
                                              <path id="Tracé_873" data-name="Tracé 873" d="M7.038,1.026C9.351,2.985,13.41,6.431,14.6,7.506a.7.7,0,0,0,1.019,0c1.194-1.076,5.253-4.522,7.566-6.481a.351.351,0,0,0,.049-.485A1.394,1.394,0,0,0,22.136,0H8.091a1.394,1.394,0,0,0-1.1.541.351.351,0,0,0,.049.484" transform="translate(-6.367 -0.057)" fill="#edd7c3"/>
                                              <path id="Tracé_874" data-name="Tracé 874" d="M16.651,80.444a.35.35,0,0,0-.374.051c-2.565,2.175-5.839,4.962-6.869,5.89a1.422,1.422,0,0,1-1.96,0C6.349,85.4,2.672,82.27.578,80.5A.351.351,0,0,0,0,80.763v8.83A1.406,1.406,0,0,0,1.4,91H15.45a1.406,1.406,0,0,0,1.4-1.4v-8.83a.351.351,0,0,0-.2-.319" transform="translate(0.319 -77.821)" fill="#edd7c3"/>
                                            </g>
                                        </g>
                                    </svg>
                                    agence@immo-waldhof.fr
                                </a>
                                <a href="tel:+33 3 88 59 26 50" class="Button isMedium isBorderRadius isSecondaryLight">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15.559" height="15.561" viewBox="0 0 15.559 15.561">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_1023" data-name="Rectangle 1023" width="15.559" height="15.561" fill="#edd7c3"/>
                                            </clipPath>
                                        </defs>
                                        <g id="icone-telephone" transform="translate(0 0)">
                                            <g id="Groupe_1386" data-name="Groupe 1386" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                <path id="Tracé_870" data-name="Tracé 870" d="M4.049,4.613,5.311,3.551a.377.377,0,0,0,.025-.561L2.456.11a.378.378,0,0,0-.534,0L.828,1.2A2.819,2.819,0,0,0,.059,3.77a14.8,14.8,0,0,0,4.288,7.442,14.877,14.877,0,0,0,7.443,4.292,2.832,2.832,0,0,0,2.566-.774l1.093-1.093a.385.385,0,0,0,0-.54L12.569,10.22a.4.4,0,0,0-.287-.11.377.377,0,0,0-.274.135l-1.062,1.266a1.074,1.074,0,0,1-1.165.334,5.845,5.845,0,0,1-.6-.232A10.344,10.344,0,0,1,6.132,9.428,10.289,10.289,0,0,1,3.947,6.375a5.872,5.872,0,0,1-.233-.6,1.073,1.073,0,0,1,.336-1.16Z" transform="translate(0 0)" fill="#edd7c3"/>
                                            </g>
                                        </g>
                                    </svg>
                                    03 88 59 26 50
                                </a>
                            </div>
                        </div>
                        <div class="Footer-right">
                            <div class="Footer-usefulLinks">
                                <a href="#">Acheter</a>
                                <a href="#">Louer</a>
                                <a href="#">Estimer</a>
                            </div>
                            <div class="Footer-row">
                                    <div class="Footer-usefulLinks">
                                        <a href="#">Acheter neuf à Strasbourg</a>
                                        <a href="#">Acheter ancien à Strasbourg</a>
                                        <a href="#">Acheter neuf à Gambsheim</a>
                                    </div>
                                    <div class="Footer-usefulLinks">
                                        <a href="#">Acheter neuf à Kilstett</a>
                                        <a href="#">Acheter ancien à Weyersheim</a>
                                        <a href="#">Investir à La Wantzenau</a>
                                    </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="Footer-foot">
                        <a href="#">Mentions légales</a>
                        <a href="#">Politique de cookies</a>
                        <a href="#">Nos honoraires</a>
                        <a href="https://www.lucyan.fr" target="_blank" class="Footer-lucyan">
                            <svg xmlns="http://www.w3.org/2000/svg" width="129.46" height="26" viewBox="0 0 129.46 26">
                                <g transform="translate(-1245 -852)">
                                    <path d="M154.58,26V0h26V26Zm24.7-1.3V1.3h-2.768L168.26,13.14v6.076h-1.3V15l-6.76,9.7h19.08Zm-20.661,0,8.2-11.763-4.685-6.725h1.581l3.9,5.589L174.93,1.3H155.876V24.7h2.742Z" transform="translate(1090.42 852)" fill="currentColor"></path>
                                    <path d="M3.4.108c1.524,0,2.8-.852,2.8-2.412,0-1.38-.864-2.088-2.7-2.52-1.224-.288-1.9-.66-1.9-1.536S2.34-7.776,3.444-7.776a3.094,3.094,0,0,1,2.112.66l.432-.66A3.781,3.781,0,0,0,3.42-8.544,2.406,2.406,0,0,0,.744-6.336c0,1.308.876,1.968,2.544,2.34,1.476.324,2.052.84,2.052,1.776,0,.972-.8,1.548-1.98,1.548a4.152,4.152,0,0,1-2.484-.8L.42-.744A5.046,5.046,0,0,0,3.4.108Zm4.7-6.78a.637.637,0,0,0,.672-.648A.637.637,0,0,0,8.1-7.968a.641.641,0,0,0-.66.648A.634.634,0,0,0,8.1-6.672ZM7.68,0h.864V-5.52H7.692Zm5.028.108A2.4,2.4,0,0,0,14.28-.408l-.324-.66a1.753,1.753,0,0,1-1.1.42c-.8,0-1.236-.348-1.236-1.152V-4.824h2.316v-.7H11.616v-1.9h-.828v1.9H9.648v.7h1.128V-1.8A1.8,1.8,0,0,0,12.708.108Zm7.4-2.976a2.543,2.543,0,0,0-2.568-2.76A2.733,2.733,0,0,0,14.76-2.76,2.8,2.8,0,0,0,17.688.108a3.2,3.2,0,0,0,2.136-.72l-.4-.624a2.454,2.454,0,0,1-1.656.612A2.086,2.086,0,0,1,15.588-2.5H20.1S20.112-2.652,20.112-2.868ZM17.568-4.9a1.7,1.7,0,0,1,1.728,1.7H15.612A1.929,1.929,0,0,1,17.568-4.9ZM27.5-5.628A2.53,2.53,0,0,0,25.356-4.56V-8.568h-.828V0h.744l.036-1.008A2.5,2.5,0,0,0,27.48.108,2.726,2.726,0,0,0,30.156-2.76,2.707,2.707,0,0,0,27.5-5.628ZM27.336-.672A1.954,1.954,0,0,1,25.344-2.76a1.961,1.961,0,0,1,1.992-2.088A2.006,2.006,0,0,1,29.3-2.76,2.006,2.006,0,0,1,27.336-.672ZM36.444-5.52h-.912L33.624-.96,31.716-5.52h-.96L33.168.036l-.96,2.3h.876l1.056-2.5Zm5.1,4.752V-8.436h-.852V0H46.14V-.768Zm9.012.876A3.214,3.214,0,0,0,54-3.42V-8.436h-.84V-3.36A2.439,2.439,0,0,1,50.58-.708,2.476,2.476,0,0,1,47.928-3.36V-8.436H47.04V-3.42A3.251,3.251,0,0,0,50.556.108Zm9.564,0a4.721,4.721,0,0,0,2.736-.732l-.4-.672a3.813,3.813,0,0,1-2.232.624,3.415,3.415,0,0,1-3.672-3.552,3.419,3.419,0,0,1,3.672-3.54,3.471,3.471,0,0,1,2.208.672l.42-.684a4.645,4.645,0,0,0-2.736-.768A4.22,4.22,0,0,0,55.692-4.2,4.185,4.185,0,0,0,60.12.108ZM70.692-8.436h-.984L67.092-4.164,64.5-8.436H63.468l3.168,5.088V0h.852V-3.324ZM77.184,0H78.1L74.544-8.436h-.732L70.248,0h.912l.792-1.908h4.44ZM74.172-7.26,76.08-2.676H72.264ZM85.608-8.436v6.864L79.956-8.52h-.54V0h.852V-6.84L85.932.084h.528v-8.52ZM88.992.108a.641.641,0,0,0,.648-.66.648.648,0,0,0-.648-.66.651.651,0,0,0-.66.66A.643.643,0,0,0,88.992.108ZM91.416,0h.84V-4.824h1.788v-.7H92.256v-.972c0-.96.516-1.368,1.224-1.368a1.392,1.392,0,0,1,.888.3l.372-.66a2.023,2.023,0,0,0-1.332-.432,1.959,1.959,0,0,0-1.992,2.184v.948H90.36v.7h1.056Zm6.612-5.628a1.9,1.9,0,0,0-1.908,1.26L96.072-5.52h-.744V0h.852V-3.084a1.679,1.679,0,0,1,1.7-1.728,1.544,1.544,0,0,1,.5.072l.072-.852A2.325,2.325,0,0,0,98.028-5.628Z" transform="translate(1276 869)" fill="currentColor"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </footer>
        ';
    }
}