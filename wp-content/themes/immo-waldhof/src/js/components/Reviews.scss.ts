export default class Reviews {
    public static reviews: NodeListOf<HTMLDivElement> | null = document.querySelectorAll(".Reviews-item");

    public static init(): void {
        if (this.reviews) {
            this.reviews.forEach((review): void => {
                review.querySelector(".Reviews-more")?.addEventListener("click", (): void => {
                    console.log('test');
                    review.classList.toggle("isOpen");
                });
            });
        }
    }
}