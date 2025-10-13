@extends('layout')

@section('title', 'About')

@section('content')
{{--  Custom button styling  --}}
<style>
    .bg-pr {
        background-color: #997DB7;
        color: white;
    }
    .bg-ps {
        background-color: #31A8FF;
        color: white;
    }
    .bg-flutter {
        background-color: #4285F4;
        color: white;
    }
    .bg-laravel {
        background-color: #FF2D20;
        color: white;
    }
</style>

<div class="row gy-4">
    <div class="col-lg-4 text-center">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <img src="{{ asset('images/IMG_9365.jpg') }}" class="rounded-circle mb-3 img-fluid" alt="Patrick">
                <h3 class="mb-0">Patrick</h3>
                <p class="text-muted small">Full Stack Developer </p>
                <p class="small">Based in <strong>Makassar, South Sulawesi.</strong></p>
                <a href="/social" class="btn btn-primary btn-sm mt-2">Contact me</a>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <h2>About Me</h2>
        <p class="lead">3rd semester Informatics Student learning web development, and app programming</p>

        <h4 class="mt-4">Skills</h4>
        <div class="mb-3">
            <span class="badge bg-pr me-1 mb-1">Premiere Pro</span>
            <span class="badge bg-ps me-1 mb-1">Photoshop</span>
            <span class="badge bg-flutter me-1 mb-1">Flutter</span>
            <span class="badge bg-laravel me-1 mb-1">Laravel</span>
        </div>

        <h4 class="mt-4">Experience</h4>
        <ul>
            <li><strong>Member & Coordinator of Creative & Publication</strong> — Informatics Student Union (2024 — present)</li>
            <li><strong>Informatics Student</strong> — Ciputra School of Business (2024 — present)</li>
        </ul>

        <h4 class="mt-4">What I’m learning</h4>
        <p>Improving full-stack skills: backend APIs, performance optimization, and UX design patterns.</p>
    </div>
</div>

@endsection
