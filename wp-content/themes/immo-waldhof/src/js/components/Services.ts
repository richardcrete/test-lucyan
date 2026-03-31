export default class Services {
    public static services: NodeListOf<HTMLLIElement> | null = document.querySelectorAll(".Service");

    public static init(): void {
        if (this.services) {
            if (window.innerWidth < 769) {
                this.services.forEach((service: HTMLLIElement): void => {
                    service.addEventListener("click", (): void => {
                        service.classList.toggle("isOpen");
                    });
                });
            } else {
                this.services.forEach((service: HTMLLIElement): void => {
                    service.addEventListener("mouseenter", (): void => {
                        service.classList.add("isOpen");
                    });

                    service.addEventListener("mouseleave", (): void => {
                        service.classList.remove("isOpen");
                    });
                });
            }
        }
    }
}