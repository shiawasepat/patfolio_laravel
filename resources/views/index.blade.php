@extends('layout')

@section('title', 'Welcome')

@section('content')
<body class="bg-gray-700">
<div class="row align-items-center">
	<div class="col-lg-8">
		<h1 class="display-5">Hi, I’m Patrick.</h1>
		<p class="lead">I’m an informatics student and front-end developer who loves designing.</p>

		<p>I specialize in:
			<strong>Flutter · HTML · CSS · Laravel</strong>
		</p>

		<div class="mt-3">
			<a href="/projects" class="btn btn-primary me-2">See projects</a>
			<a href="/about" class="btn btn-outline-secondary me-2">About me</a>
			<a href="/social" class="btn btn-outline-secondary">Socials</a>
		</div>
	</div>

	<div class="col-lg-4 text-center">
		<img src="{{ asset('images/IMG_9365.jpg') }}" alt="Profile" class="rounded-circle ">
	</div>
</div>

@endsection