@extends('layouts.frontend.frontend-layout')

@section('content')
    <div id="home" class="hero-image">
        @include('layouts.frontend-partials._hero')
    </div>
    <section class="about container mt-5" id="about-me">
        @include('layouts.frontend-partials._about')
    </section>
    <section class="skills container mt-5" id="skills">
        @include('layouts.frontend-partials._skills')
    </section>
    <section class="portofolio container mt-5" id="portfolio">
        @include('layouts.frontend-partials._portfolio')
    </section>
    <section class="my-blogs container mt-5" id="blogs">
        @include('layouts.frontend-partials._blogs')
    </section>
    <section class="contact mt-5" id="contact">
        @include('layouts.frontend-partials._contact')
    </section>
@endsection