<?php

class HomeSlider
{
    public static function getHomeSlider(array $images): string
    {
        $html = '
            <div class="HomeSlider">
                <div class="HomeSlider-gradient"></div>
                <div class="HomeSlider-container isLoop swiper" data-autoplay-delay="2000">
                    <div class="HomeSlider-wrapper swiper-wrapper">';

            foreach ($images as $image) {
                $html .= '<div class="HomeSlider-slide swiper-slide" data-data-swiper-autoplay="2000" style="background-image: url(' . get_site_url() . $image . ');">
                    <div class="HomeSlider-content"></div>
                </div>';
            }

        $html .= '</div>
                </div>
            </div>
        ';

        return $html;
    }
}