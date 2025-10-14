@extends('layouts.main')

@section('title', 'Projects')
<style>
    .bg-tailwind {
    background-color: #5BA5A0
    }
    .bg-java {
        background-color: #ef7a3a;
    }
    .bg-springboot {
        background-color: #6DB33F;
    }
    .bg-flutter {
        background-color: #02569B;
    }
    .bg-html {
        background-color: #E34F26;
    }
</style>
@section('content')
<h2 class="mb-4">My Projects</h2>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <!-- Project Card 1 -->
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/Clockin_banner.png') }}" class="card-img-top" alt="Clockin">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Clockin</h5>
                <p class="card-text">A web based time tracking tool for freelancers and remote teams.</p>
                <div class="mt-auto">
                    <div class="mb-2">
                        <span class="badge bg-tailwind me-1">Tailwind</span>
                        <span class="badge bg-springboot me-1">Spring Boot</span>
                    </div>
                    <a href="https://github.com/1nnocentia/timeproductivityweb" target="_blank" class="btn btn-primary btn-sm">View Front-end</a>
                    <a href="https://github.com/1nnocentia/timemanagement-clockin-backend" target="_blank" class="btn btn-primary btn-sm">View Back-end</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Card 2 -->
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/kana.png') }}" class="card-img-top" alt="KANA">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">KANA</h5>
                <p class="card-text">A mobile application selling 【OSHI NO KO】 merch.</p>
                <div class="mt-auto">
                    <div class="mb-2">
                        <span class="badge bg-flutter me-1">Flutter</span>
                    </div>
                    <a href="https://github.com/shiawasepat/mdc_100_part2" target="_blank" class="btn btn-primary btn-sm">View</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Card 3 -->
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/mai_GUI.png') }}" class="card-img-top" alt="mai_GUI">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">maimai Master Difficulty List</h5>
                <p class="card-text">A Java GUI program that lists boss songs from maimai. A washing machine like rhythm game</p>
                <div class="mt-auto">
                    <div class="mb-2">
                        <span class="badge bg-java me-1">Java</span>
                    </div>
                    <a href="https://github.com/shiawasepat/mai_GUI" target='_blank' class="btn btn-primary btn-sm">View</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
