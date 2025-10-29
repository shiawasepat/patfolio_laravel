@extends('portfolio.home')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($skills->groupBy('category') as $category => $categorySkills)
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-bold mb-4">{{ $category }}</h2>
            <ul class="space-y-2">
                @foreach($categorySkills as $skill)
                    <li class="flex items-center">
                        <span class="text-gray-800">{{ $skill->name }}</span>
                        @if($skill->description)
                            <span class="ml-2 text-sm text-gray-500">- {{ $skill->description }}</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>
@endsection