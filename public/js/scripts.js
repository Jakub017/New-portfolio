const heroLetters = [...document.querySelectorAll(".hero__title--letter")];
const heroWords = [...document.querySelectorAll(".hero__word")];

document.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        heroWords.forEach((letter, i) => {
            letter.style.animation = "fadeInUp 0.5s both ease-in-out";
            letter.style.animationDelay = 0.2 * i + "s";
        });
    }, 500);
});
