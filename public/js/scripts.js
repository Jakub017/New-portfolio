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

const rectangles = gsap.timeline({
    scrollTrigger: {
        trigger: ".hero",
        start: "top top",
        end: "bottom top",
        scrub: 1,
        pin: true, // Przypięcie sekcji hero na czas animacji
    },
});

rectangles
    .to(
        ".hero__rectangle--rectangle-1",
        { height: "100%", duration: 0.25 },
        0.04
    )
    .to(
        ".hero__rectangle--rectangle-2",
        { height: "100%", duration: 0.25 },
        0.03
    )
    .to(".hero__rectangle--rectangle-3", { height: "100%", duration: 0.25 }, 0)
    .to(
        ".hero__rectangle--rectangle-4",
        { height: "100%", duration: 0.25 },
        0.01
    )
    .to(
        ".hero__rectangle--rectangle-5",
        { height: "100%", duration: 0.25 },
        0.02
    );
