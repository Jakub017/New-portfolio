@extends('layouts.app') @section('content')

<div class="hero">
    <spline-viewer
        class="hero__animation"
        url="https://prod.spline.design/DAA935v6lzeJMKXw/scene.splinecode"
    ></spline-viewer>
    <div class="hero__title-wrapper">
        <h1 class="hero__title">
            <div class="hero__word">
                <span class="hero__title hero__title--letter">J</span
                ><span class="hero__title hero__title--letter">a</span
                ><span class="hero__title hero__title--letter">k</span
                ><span class="hero__title hero__title--letter">u</span
                ><span class="hero__title hero__title--letter">b</span>
            </div>
            <div class="hero__word">
                <span class="hero__title hero__title--letter">L</span
                ><span class="hero__title hero__title--letter">i</span
                ><span class="hero__title hero__title--letter">p</span
                ><span class="hero__title hero__title--letter">i</span
                ><span class="hero__title hero__title--letter">ń</span
                ><span class="hero__title hero__title--letter">s</span
                ><span class="hero__title hero__title--letter">k</span
                ><span class="hero__title hero__title--letter">i</span>
            </div>

            <div class="hero__word">
                <span class="hero__title hero__title--letter">-</span>
            </div>

            <div class="hero__word">
                <span class="hero__title hero__title--letter">F</span
                ><span class="hero__title hero__title--letter">u</span
                ><span class="hero__title hero__title--letter">l</span
                ><span class="hero__title hero__title--letter">l</span
                ><span class="hero__title hero__title--letter">-</span
                ><span class="hero__title hero__title--letter">S</span
                ><span class="hero__title hero__title--letter">t</span
                ><span class="hero__title hero__title--letter">a</span
                ><span class="hero__title hero__title--letter">c</span
                ><span class="hero__title hero__title--letter">k</span>
            </div>

            <div class="hero__word">
                <span
                    class="hero__title hero__title--colored hero__title--letter"
                    >W</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >e</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >b</span
                >
            </div>

            <div class="hero__word">
                <span
                    class="hero__title hero__title--colored hero__title--letter"
                    >D</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >e</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >v</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >e</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >l</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >o</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >p</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >e</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >r</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >e</span
                ><span
                    class="hero__title hero__title--colored hero__title--letter"
                    >r</span
                >
            </div>
        </h1>
    </div>

    <div class="hero__stack">
        <h3 class="hero__stack-title">Full-Stack Web Developer</h3>
        <span class="hero__stack-name">Laravel & Vue.js</span>
    </div>
    <div class="hero__buttons">
        <button href="#" class="hero__button hero__button--full">
            Explore
        </button>
        <button
            data-cursor-text="Download"
            href="#"
            class="hero__button hero__button--empty hover-item"
        >
            My resume
        </button>
    </div>
</div>

@endsection @section('scripts')
<script>
    window.onload = function () {
        var shadowRoot = document.querySelector("spline-viewer").shadowRoot;
        shadowRoot.querySelector("#logo").remove();
    };
</script>
@endsection
