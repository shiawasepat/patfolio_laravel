@extends('portfolio.home')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($projects as $project)
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="aspect-w-16 aspect-h-9">
                @if($project->image_url)
                    <img 
                        src="{{ $project->image_url }}" 
                        alt="{{ $project->title }}"
                        class="w-full h-48 object-cover"
                        loading="lazy"
                        onerror="this.onerror=null; this.src='{{ Storage::url('projects/default.jpg') }}'"
                    >
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                        <span class="text-gray-400">No image available</span>
                    </div>
                @endif
            </div>
            
            <div class="p-6">
                <h3 class="font-bold text-xl mb-2">{{ $project->title }}</h3>
                <p class="text-gray-700 mb-4">{{ Str::limit($project->description, 150) }}</p>
                
                @if(is_array($project->technologies))
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project->technologies as $tech)
                            <span class="px-2 py-1 bg-gray-200 rounded-full text-sm">{{ $tech }}</span>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>
@endsection