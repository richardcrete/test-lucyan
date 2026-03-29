export default class MenuMobile {
    public static header: HTMLElement | null = document.querySelector(".Header");
    public static menuMobile: HTMLMenuElement | null = document.querySelector(".MenuMobile");
    public static menuMobileBurger: HTMLButtonElement | null = document.querySelector(".MenuMobile-burger");

    public static init(): void {
        this.menuMobileBurger?.addEventListener("click", (): void => {
            this.toggleMenu();
        });
    }

    public static toggleMenu(): void {
        document.body.classList.toggle("openMenu");
        if (this.header) {
            this.header.classList.toggle("openMenu");
        }

        if (this.menuMobile) {
            this.menuMobile.classList.toggle("isOpen");
        }
    }
}