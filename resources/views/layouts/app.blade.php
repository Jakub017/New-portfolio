<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
        <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>

        <link
            rel="stylesheet"
            href="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.css"
        />
        <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>

        <script
            type="module"
            src="https://unpkg.com/@splinetool/viewer@1.9.46/build/spline-viewer.js"
        ></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap"
            rel="stylesheet"
        />
        @vite('resources/scss/style.scss')
    </head>
    <body>
        @include('partials.nav') @yield('content') @include('partials.footer')
        @yield('scripts')
        <script>
            const cursor = new MouseFollower({
                container: document.body,
                speed: 0.3,
                className: "mf-cursor",
                textClassName: "mf-cursor-text",
            });

            const movieApp = document.querySelector(".works__item--movie");
            const justtag = document.querySelector(".works__item--justtag");
            const siteWizard = document.querySelector(".works__item--wizard");

            justtag.addEventListener("mouseenter", () => {
                cursor.setImg("/justtag.webp");
            });

            justtag.addEventListener("mouseleave", () => {
                cursor.removeImg();
            });

            movieApp.addEventListener("mouseenter", () => {
                cursor.setImg("/movie_app.webp");
            });

            movieApp.addEventListener("mouseleave", () => {
                cursor.removeImg();
            });

            siteWizard.addEventListener("mouseenter", () => {
                cursor.setImg("/sitewizard.png");
            });

            siteWizard.addEventListener("mouseleave", () => {
                cursor.removeImg();
            });

            const hoverItems = [...document.querySelectorAll(".hover-item")];
            const cursorItem = document.querySelector(".mf-cursor");

            hoverItems.forEach((item) => {
                item.addEventListener("mouseenter", () => {
                    cursorItem.style.mixBlendMode = "normal";
                });
                item.addEventListener("mouseleave", () => {
                    cursorItem.style.mixBlendMode = "difference";
                });
            });
        </script>
    </body>
</html>
