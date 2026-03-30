export default class MenuMobile {
    public static header: HTMLElement | null = document.querySelector(".Header");
    public static menu: HTMLMenuElement | null = document.querySelector(".Menu");
    public static menuItems: NodeListOf<HTMLLIElement> = document.querySelectorAll(".Menu-item");
    public static searchForm: HTMLDivElement | null = document.querySelector(".SearchForm");

    public static init(): void {
        if (this.searchForm) {
            window.addEventListener("scroll", () => {
                if (this.searchForm && this.searchForm.getBoundingClientRect().top < 100) {
                    this.addClasses();
                } else {
                    this.removeClasses();
                }
            });
        }

        this.menuItems.forEach((menuItem: HTMLLIElement) => {
            menuItem.addEventListener("mouseenter", () => {
                this.addClasses();
            });
        });

        this.menuItems.forEach((menuItem: HTMLLIElement) => {
            menuItem.addEventListener("mouseleave", () => {
                this.removeClasses();
            });
        });
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