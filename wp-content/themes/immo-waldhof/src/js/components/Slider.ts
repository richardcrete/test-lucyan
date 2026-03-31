import Swiper from 'swiper';
import {Navigation, Autoplay} from "swiper/modules";
import {AutoplayOptions} from "swiper/types";

Swiper.use([Autoplay, Navigation]);

export default class Slider {
    public static sliders: NodeListOf<HTMLElement> = document.querySelectorAll(".swiper");
    public static swipers: Swiper[] = [];

    public static init() {
        this.sliders.forEach((slider: HTMLElement) => {
            let swiper: Swiper = new Swiper(slider, {
                loop: slider.classList.contains("isLoop"),
                autoplay: this.getAutoplay(slider),
                slidesPerView: "auto",
                spaceBetween: this.getSpaceBetween(slider),
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });

            this.swipers.push(swiper);
        });
    }

    public static getAutoplay(element: HTMLElement): boolean | AutoplayOptions {
        if (element.getAttribute("data-autoplay")) {
            return {
                delay: parseInt(element.getAttribute("data-autoplay") ?? "5000"),
                disableOnInteraction: true,
            };
        }

        return false;
    }

    public static getSpaceBetween(element: HTMLElement): number {
        if (window.innerWidth < 769) {
            return parseInt(element.getAttribute("data-mobile-space-between") ?? "0");
        }

        return parseInt(element.getAttribute("data-desktop-space-between") ?? "0");
    }
}