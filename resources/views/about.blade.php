@extends('layout')
@section("content")
    <div class="about">
        <div class="about__title">
            <div class="about__title-hr"></div>
        </div>

        <div class="about-box">
            <div class="about-box__left">
                <img src="{{ asset('./img/profileabout.svg') }}" alt="">
            </div>
            <div class="about-box__right">
                <p class="about-box__right-title">Who I Am?</p>
                <p class="about-box__right-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at tellus semper lacus varius suscipit. Suspendisse pulvinar, justo id scelerisque efficitur, quam augue pharetra metus, ultricies finibus elit ipsum vitae.

                    Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum </p>
                <button class="about-box__right-button">Contact Me</button>
            </div>
        </div>
    </div>
    @endsection