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
<!-- 
<div class="section features">
    <div class="section__wrapper">
        <div class="features__heading-wrapper">
            <h2 class="section__heading features__heading">
                <span class="section__colored">Crafting Solutions,</span> Step
                by Step
            </h2>
            <p class="section__subheading features__subheading">
                Building solutions that not only meet your goals but also
                elevate your digital presence with a focus on innovation,
                precision, and user experience.
            </p>
        </div>
        <div class="features__items">
            <div class="features__item features__item--plan hover-item">
                <h2 class="features__name">Plan</h2>
            </div>
            <div class="features__item features__item--design hover-item">
                <h2 class="features__name">Design</h2>
            </div>
            <div class="features__item features__item--develop hover-item">
                <h2 class="features__name">Develop</h2>
            </div>
            <div class="features__item features__item--launch hover-item">
                <h2 class="features__name">Launch</h2>
            </div>
        </div>
    </div>
</div>

<div class="section works">
    <div class="section__wrapper">
        <h2 class="section__heading section__heading--center">
            My <span class="section__colored">portfolio</span>
        </h2>
        <div class="works__container"></div>
    </div>
</div> -->
@endsection @section('scripts')
<script>
    window.onload = function () {
        var shadowRoot = document.querySelector("spline-viewer").shadowRoot;
        shadowRoot.querySelector("#logo").remove();
    };
</script>
@endsection
