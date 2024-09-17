document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");

    const imageItems = document.querySelectorAll(".image-item");

    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const title = this.getAttribute("data-title");

            filterButtons.forEach((btn) =>
                btn.classList.remove("bg-accent-200")
            );

            this.classList.add("bg-accent-200");

            if (title === "") {
                imageItems.forEach((item) => {
                    item.style.display = "block";
                });
            } else {
                imageItems.forEach((item) => {
                    item.style.display = "none";
                });

                imageItems.forEach((item) => {
                    if (item.getAttribute("data-title") === title) {
                        item.style.display = "block";
                    }
                });
            }
        });
    });
});