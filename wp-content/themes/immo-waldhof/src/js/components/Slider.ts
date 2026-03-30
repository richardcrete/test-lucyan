import Swiper from 'swiper';
import {Navigation, Autoplay} from "swiper/modules";
Swiper.use([Autoplay]);

export default class Slider {
    public static sliders: NodeListOf<HTMLElement> = document.querySelectorAll(".swiper");
    public static swipers: Swiper[] = [];

    public static init() {
        this.sliders.forEach((slider: HTMLElement) => {
            let swiper: Swiper= new Swiper(slider, {
                loop: slider.classList.contains("isLoop"),
                autoplay: {
                    disableOnInteraction: true,
                }
            });

            this.swipers.push(swiper);
        });
    }
}