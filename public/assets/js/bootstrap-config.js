const likeIcon = document.querySelector(".like-icon");
const disLikeIcon = document.querySelector(".dislike-icon");

likeIcon.addEventListener("click", () => {
    likeIcon.style.color = "blue";
    disLikeIcon.hidden = "true";
});
disLikeIcon.addEventListener("click", () => {
    disLikeIcon.style.color = "red";
    likeIcon.hidden = "true";
});

const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);



