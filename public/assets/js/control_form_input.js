const passwordInput1 = document.querySelector(".control-password-input1");
const passwordInput2 = document.querySelector(".control-password-input2");
const eyeIcon1 = document.querySelector(".eye-icon1");
const eyeIcon2 = document.querySelector(".eye-icon2");

eyeIcon1.addEventListener("click", () => {
    if (passwordInput1.type == "password") {
        passwordInput1.type = "text";
        eyeIcon1.classList.remove("fa-eye");
        eyeIcon1.classList.add("fa-eye-slash");
    } else {
        passwordInput1.type = "password";
        eyeIcon1.classList.remove("fa-eye-slash");
        eyeIcon1.classList.add("fa-eye");
    }
});

eyeIcon2.addEventListener("click", () => {
    if (passwordInput2.type == "password") {
        passwordInput2.type = "text";
        eyeIcon2.classList.remove("fa-eye");
        eyeIcon2.classList.add("fa-eye-slash");
    } else {
        passwordInput2.type = "password";
        eyeIcon2.classList.remove("fa-eye-slash");
        eyeIcon2.classList.add("fa-eye");
    }
});

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

