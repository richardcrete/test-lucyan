export default class MenuMobile {
    public static header: HTMLElement | null = document.querySelector(".Header");
    public static menuMobile: HTMLMenuElement | null = document.querySelector(".MenuMobile");
    public static menuMobileBurger: HTMLButtonElement | null = document.querySelector(".MenuMobile-burger");
    public static searchForm: HTMLDivElement | null = document.querySelector(".SearchForm");

    public static init(): void {
        this.menuMobileBurger?.addEventListener("click", (): void => {
            this.toggleMenu();
        });

        if (this.searchForm) {
            window.addEventListener("scroll", () => {
                if (this.searchForm && this.searchForm.getBoundingClientRect().top < 115) {
                    this.addClasses();
                } else {
                    this.removeClasses();
                }
            });
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
    }

    public static removeClasses(): void {
        if (this.menuMobile) {
            this.menuMobile.classList.remove("isScrolled");
        }
    }}