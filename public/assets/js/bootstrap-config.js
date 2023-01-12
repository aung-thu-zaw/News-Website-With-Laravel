// const likeIcon = document.querySelector(".like-icon");
// const disLikeIcon = document.querySelector(".dislike-icon");

// likeIcon.addEventListener("click", () => {
//     likeIcon.style.color = "blue";
//     disLikeIcon.hidden = "true";
// });
// disLikeIcon.addEventListener("click", () => {
//     disLikeIcon.style.color = "red";
//     likeIcon.hidden = "true";
// });

const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

// Carosel
let items = document.querySelectorAll(".carousel .carousel-item");

items.forEach((el) => {
    const minPerSlide = 4;
    let next = el.nextElementSibling;
    for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0];
        }
        let cloneChild = next.cloneNode(true);
        el.appendChild(cloneChild.children[0]);
        next = next.nextElementSibling;
    }
});
