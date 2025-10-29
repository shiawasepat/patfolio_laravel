@extends('layouts.main')

@section('title', 'Welcome')
<div class="dark: bg-gray-700">
@section('content')
<div class="min-h-screen flex align-items-center ">
    <div class="col-lg-8 ">
        <h1 class="display-5">Hi, I’m Patrick.</h1>
        <p class="lead">I’m an informatics student and front-end developer who loves designing.</p>

        <p>I specialize in:
            <strong>Flutter · HTML · CSS · Laravel</strong>
        </p>

        <div class="mt-3">
            <a href="/social" class="inline-flex items-center px-4 py-2 border 
            border-white/10 text-white rounded-md hover:bg-white/5">Socials</a>
            <a href="{{ route('portfolio.home') }}" 
            class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded
            dark:bg-indigo-400 dark:hover:bg-indigo-400/50 dark:transition-all">
                Portfolio
            </a>
            <a href="{{ route('testimonies') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 
            hover:bg-indigo-700 text-white rounded
            dark:bg-indigo-400 dark:hover:bg-indigo-400/50 dark:transition-all">Testimonies</a>
            
        </div>
    </div>

    <div class="col-lg-4 text-center">
        <img src="{{ asset('images/IMG_9365.jpg') }}" alt="Profile" class="rounded-circle">
    </div>
</div>
@endsection
