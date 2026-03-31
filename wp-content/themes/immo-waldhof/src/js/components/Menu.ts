export default class MenuMobile {
    public static header: HTMLElement | null = document.querySelector(".Header");
    public static menu: HTMLMenuElement | null = document.querySelector(".Menu");
    public static menuItems: NodeListOf<HTMLLIElement> = document.querySelectorAll(".Menu-item");
    public static searchForm: HTMLDivElement | null = document.querySelector(".SearchForm");

    public static init(): void {
        this.afterScroll();

        if (this.searchForm) {
            window.addEventListener("scroll", (): void => {
                this.afterScroll();
            });
        }

        this.menuItems.forEach((menuItem: HTMLLIElement): void => {
            menuItem.addEventListener("mouseenter", (): void => {
                if (!this.checkScroll()) {
                    this.addClasses();
                }
            });
        });

        this.menuItems.forEach((menuItem: HTMLLIElement): void => {
            menuItem.addEventListener("mouseleave", (): void => {
                if (!this.checkScroll()) {
                    this.removeClasses();
                }
            });
        });
    }

    public static checkScroll(): boolean | null {
        return (this.searchForm && this.searchForm.getBoundingClientRect().top < 100);
    }

    public static afterScroll(): void {
        if (this.checkScroll()) {
            this.addClasses();
        } else {
            this.removeClasses();
        }
    }

    public static addClasses(): void {
        if (this.menu) {
            this.menu.classList.add("isScrolled");
        }

        if (this.header) {
            this.header.classList.add("isScrolled");
        }
    }

    public static removeClasses(): void {
        if (this.menu) {
            this.menu.classList.remove("isScrolled");
        }

        if (this.header) {
            this.header.classList.remove("isScrolled");
        }
    }
}