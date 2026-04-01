import Menu from './components/Menu';
import MenuMobile from './components/MenuMobile';
import Slider from "./components/Slider";
import Services from "./components/Services";
import Reviews from "./components/Reviews.scss";

Menu.init();
MenuMobile.init();
Slider.init();
Services.init();
Reviews.init();

window.addEventListener("load", (): void => {
    const loader: HTMLDivElement | null = document.querySelector(".Loader");
    if (loader) {
        loader.classList.add("isHidden");
        loader.addEventListener('transitionend', (): void => {
            loader.remove();
            document.querySelector("html")?.removeAttribute("style");
        });
    }

});