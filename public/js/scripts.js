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

gsap.registerPlugin(ScrollTrigger);

gsap.timeline({
    scrollTrigger: {
        trigger: ".hero",
        start: "top",
        end: "top center",
        scrub: true,
        pin: true,
        pinSpacing: false,
    },
})
    .to(".hero__rectangle--rectangle-1", { height: "100%", duration: 1 }, 0)
    .to(".hero__rectangle--rectangle-2", { height: "100%", duration: 1 }, 0.2)
    .to(".hero__rectangle--rectangle-3", { height: "100%", duration: 1 }, 0.4)
    .to(".hero__rectangle--rectangle-4", { height: "100%", duration: 1 }, 0.6);
