const app = document.getElementById("app");

const latestNewsOne = document.getElementById("latest-news-1").innerText;
const latestNewsTwo = document.getElementById("latest-news-2").innerText;
const latestNewsThree = document.getElementById("latest-news-3").innerText;
const latestNewsFour = document.getElementById("latest-news-4").innerText;
const latestNewsFive = document.getElementById("latest-news-5").innerText;

const latestNewsOneLink = document.getElementById("latest-news-1").href;
const latestNewsTwoLink = document.getElementById("latest-news-2").href;
const latestNewsThreeLink = document.getElementById("latest-news-3").href;
const latestNewsFourLink = document.getElementById("latest-news-4").href;
const latestNewsFiveLink = document.getElementById("latest-news-5").href;

const typewriter = new Typewriter(app, {
    loop: true,
    cursor: "",
    delay: "100",
});

typewriter
    .typeString(
        `<a href="${latestNewsOneLink}" class="text-decoration-none">${latestNewsOne}</a>`
    )
    .pauseFor(2000)
    .deleteAll()
    .typeString(
        `<a href="${latestNewsTwoLink}" class="text-decoration-none">${latestNewsTwo}</a>`
    )
    .pauseFor(2000)
    .deleteAll()
    .typeString(
        `<a href="${latestNewsThreeLink}" class="text-decoration-none">${latestNewsThree}</a>`
    )
    .pauseFor(2000)
    .deleteAll()
    .typeString(
        `<a href="${latestNewsFourLink}" class="text-decoration-none">${latestNewsFour}</a>`
    )
    .pauseFor(2000)
    .deleteAll()
    .typeString(
        `<a href="${latestNewsFiveLink}" class="text-decoration-none">${latestNewsFive}</a>`
    )
    .pauseFor(2000)
    .deleteAll()
    .start();
