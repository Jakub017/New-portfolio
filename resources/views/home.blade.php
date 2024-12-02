@extends('layouts.app') @section('content')

<div class="hero">
    <spline-viewer
        class="hero__animation"
        url="https://prod.spline.design/DAA935v6lzeJMKXw/scene.splinecode"
    ></spline-viewer>
    <h1 class="hero__title">
        Jakub Lipiński - Full Stack
        <span class="hero__colored">Web Developer</span>
    </h1>

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
