@extends('layouts.main')

@section('title', 'Testimonies')

@section('content')
<section class="py-12">
  <div class="max-w-4xl mx-auto px-4">
    <header class="mb-8">
      <h2 class="text-3xl font-extrabold text-gray-800 dark:text-black tracking-tight">User Testimonies</h2>
      <p class="mt-2 text-sm text-black/70">Real feedback from people who used my work — honest and up-to-date.</p>
    </header>

    @if($testimonies->isEmpty())
      <div class="rounded-lg bg-white/5 p-6 text-center">
        <p class="text-black/70">No testimonies yet. Be the first to leave feedback!</p>
        <a href="#contact" class="mt-4 inline-block px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-black rounded">Contact me</a>
      </div>
    @else
      <ul class="space-y-4">
        @foreach($testimonies as $t)
          <li class="bg-white/5 rounded-lg p-5 shadow-sm ring-1 ring-white/6">
            <div class="flex gap-4">
              <div class="flex-none">
                <div class="h-12 w-12 rounded-full bg-blue-600 flex items-center justify-center text-white font-semibold">
                  {{ strtoupper(substr($t->user?->name ?? 'A', 0, 1)) }}
                </div>
              </div>

              <div class="flex-1">
                <div class="flex items-start justify-between gap-4">
                  <div>
                    <div class="text-sm font-semibold text-black">
                      {{ $t->user?->name ?? 'Anonymous' }}
                    </div>
                    <div class="text-xs text-black/60">
                      {{ $t->created_at->format('M j, Y') }} · <span class="lowercase">{{ $t->created_at->diffForHumans() }}</span>
                    </div>
                  </div>

                  @if($t->rating)
                    <div class="flex items-center gap-1">
                      @for ($i = 1; $i <= 5; $i++)
                        <svg class="h-4 w-4 {{ $i <= $t->rating ? 'text-yellow-400' : 'text-black/20' }}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.966a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.388 2.46a1 1 0 00-.364 1.118l1.287 3.966c.3.921-.755 1.688-1.54 1.118L10 13.347l-3.388 2.46c-.784.57-1.84-.197-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.607 9.393c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69L9.05 2.927z"/>
                        </svg>
                      @endfor
                    </div>
                  @endif
                </div>

                <p class="mt-3 text-black/90 leading-relaxed">
                  {{ $t->content }}
                </p>

                @if(strlen($t->content) > 240)
                  <div class="mt-3 text-xs text-black/60">Longer feedback — thank you!</div>
                @endif
              </div>
            </div>
          </li>
        @endforeach
      </ul>

      <div class="mt-6">
        {{ $testimonies->links() }}
      </div>
    @endif
  </div>
</section>
@endsection