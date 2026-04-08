<x-layout>
    <div class="container py-5">

        <a href="{{ route('articles.index') }}" class="btn btn-outline-dark mb-3">
            ← Indietro
        </a>
 

        <div class="card p-4 shadow-sm">
            <h1 class="mb-3">{{ $article->title }}</h1>

            @if($article->tags->isNotEmpty())
                <div class="mb-3 d-flex flex-wrap gap-2">
                    @foreach($article->tags as $tag)
                        <span class="tag-pill">{{ $tag->name }}</span>
                    @endforeach
                </div>
            @endif

            <p class="text-muted">
                Pubblicato il {{ $article->created_at->format('d/m/Y H:i') }}
            </p>

            <hr>

            <p>{{ $article->content }}</p>

            <div class="mt-4">
                <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning">
                    Modifica
                </a>
            </div>
             <div class="mt-4">
                    <form method="POST" action="{{ route('articles.destroy', $article) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">
                            Elimina articolo
                        </button>
                    </form>
                </div>
        </div>

    </div>
</x-layout>