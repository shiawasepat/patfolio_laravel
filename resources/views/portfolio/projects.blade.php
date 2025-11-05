@extends('portfolio.home')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($projects as $project)
        <div class="card">
            <h3>{{ $project->title }} </h3>
            <p>{{ $project->description }}</p>
            <small>Category: {{ $project->category->name }}</small>
        </div>
    @endforeach
</div>
@endsection