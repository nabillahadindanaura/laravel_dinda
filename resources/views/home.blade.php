@extends('layout')
@section("content")
    <div class="home">
        <div class="home__left">
            <div class="title">
                <p class="title-1">Hello, I'm</p>
                <p class="title-2">N. Adinda</p>
                <p class="title-3">Web Developer</p>
            </div>
            <button class="home__left-button">Contact Me &nbsp; &rarr;</button>
        </div>
        <div class="home__right">
            <img src="{{ asset('./img/profile.png') }}" alt="">
        </div>
    </div>
@endsection