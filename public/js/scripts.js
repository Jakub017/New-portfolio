// const heroLetters = [...document.querySelectorAll(".hero__title--letter")];
// const heroWords = [...document.querySelectorAll(".hero__word")];

// document.addEventListener("DOMContentLoaded", () => {
//     setTimeout(() => {
//         heroWords.forEach((letter, i) => {
//             letter.style.animation = "fadeInUp 0.5s both ease-in-out";
//             letter.style.animationDelay = 0.2 * i + "s";
//         });
//     }, 500);
// });

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

gsap.to(".hero__top-rectangle", {
    stagger: {
        each: 0.025,
        from: "edges",
    },
    duration: 0.75,
    transform: "translateY(-100%)",
    delay: 0.35,
});

gsap.from(".hero__title--letter", {
    stagger: {
        each: 0.02,
        from: 0,
    },
    yPercent: 100,
    duration: 0.65,
    delay: 0.75,
});

gsap.from(".hero__stack-title--letter", {
    stagger: {
        each: 0.02,
        from: 0,
    },
    yPercent: 100,
    duration: 0.65,
    delay: 1.8,
});

gsap.from(".hero__stack-name--letter", {
    stagger: {
        each: 0.02,
        from: 0,
    },
    yPercent: 100,
    duration: 0.65,
    delay: 2.55,
});

// gsap.to(".hero__rectangle", {
//     stagger: {
//         each: 0.025,
//         from: "edges",
//     },
//     scrollTrigger: {
//         trigger: ".hero",
//         start: "top top",
//         end: "bottom top",
//         scrub: 1,
//         pin: true,
//         pinSpacing: false,
//         pinSpacer: false,
//     },
//     transform: "translateY(0%)",
// });

const rectangles = gsap.timeline({
    scrollTrigger: {
        trigger: ".hero",
        start: "top top",
        end: "bottom top",
        scrub: 1,
        pin: true,
        pinSpacing: false,
        pinSpacer: false,
    },
});

rectangles
    .to(
        ".hero__rectangle--rectangle-1",
        { transform: "translateY(0%)", duration: 0.5 },
        0.22
    )
    .to(
        ".hero__rectangle--rectangle-2",
        { transform: "translateY(0%)", duration: 0.5 },
        0.2
    )
    .to(
        ".hero__rectangle--rectangle-3",
        { transform: "translateY(0%)", duration: 0.5 },
        0.04
    )
    .to(
        ".hero__rectangle--rectangle-4",
        { transform: "translateY(0%)", duration: 0.5 },
        0.08
    )
    .to(
        ".hero__rectangle--rectangle-5",
        { transform: "translateY(0%)", duration: 0.5 },
        0.16
    );

const aboutTl = gsap.timeline({
    scrollTrigger: {
        trigger: ".about",
        start: "top 90%",
    },
});

aboutTl
    .to(".about__title", {
        opacity: "1",
        transform: "translateY(0)",
        duration: 0.5,
        delay: 0.5,
    })
    .to(".about__heading", {
        opacity: "1",
        transform: "translateY(0)",
        duration: 0.5,
    })
    .to(".about__description", {
        opacity: "1",
        transform: "translateY(0)",
        duration: 0.5,
    })
    .to(".about__link--link-1", {
        opacity: "1",
        transform: "translateY(0)",
        duration: 0.25,
    })
    .to(".about__link--link-2", {
        opacity: "1",
        transform: "translateY(0)",
        duration: 0.25,
    });

let horizontalWrapper = document.querySelector(".horizontal-wrapper");
let horizontalWidth = horizontalWrapper.offsetWidth;
let amountToScroll = horizontalWidth - window.innerWidth;

gsap.to(horizontalWrapper, {
    scrollTrigger: {
        trigger: ".horizontal",
        start: "top top",
        end: "+=" + amountToScroll,
        pin: true,
        scrub: 1,
    },
    x: -amountToScroll,
});
