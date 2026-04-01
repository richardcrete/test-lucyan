export default class MenuMobile {
    public static header: HTMLElement | null = document.querySelector(".Header");
    public static menuMobile: HTMLMenuElement | null = document.querySelector(".MenuMobile");
    public static menuMobileBurger: HTMLButtonElement | null = document.querySelector(".MenuMobile-burger");
    public static searchForm: HTMLDivElement | null = document.querySelector(".SearchForm");

    public static init(): void {
        if (window.innerWidth < 769) {
            this.afterScroll();
        }
        this.menuMobileBurger?.addEventListener("click", (): void => {
            this.toggleMenu();
        });

        if (window.innerWidth < 769) {
            window.addEventListener("scroll", (): void => {
                this.afterScroll();
            });
        }
    }

    public static checkScroll(): boolean | null {
        return (this.searchForm && this.searchForm.getBoundingClientRect().top < 350);
    }

    public static afterScroll(): void {
        if (this.checkScroll()) {
            this.addClasses();
        } else {
            this.removeClasses();
        }
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

    public static addClasses(): void {
        if (this.menuMobile) {
            this.menuMobile.classList.add("isScrolled");
        }

        if (this.header) {
            this.header.classList.add("isScrolled");
        }
    }

    public static removeClasses(): void {
        if (this.menuMobile) {
            this.menuMobile.classList.remove("isScrolled");
        }

        if (this.header) {
            this.header.classList.remove("isScrolled");
        }
    }
}