<x-layout>
    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>I tuoi articoli</h1>
            <a href="{{ route('articles.create') }}" class="btn btn-travel rounded-pill">
                + Nuovo articolo
            </a>
        </div>

        @if($articles->isEmpty())
            <p>Nessun articolo ancora. Inizia a scrivere il tuo primo viaggio </p>
        @endif

        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-6 mb-4">
                    <div class="card p-3 shadow-sm h-100">
                        <h5>{{ $article->title }}</h5>

                        <p>{{ \Illuminate\Support\Str::limit($article->content, 100) }}</p>

                        @if($article->tags->isNotEmpty())
                            <div class="mb-3 d-flex flex-wrap gap-2">
                                @foreach($article->tags as $tag)
                                    <span class="tag-pill">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        @endif

                        <div class="mt-auto">
                            <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-outline-dark">
                                Leggi
                            </a>
                            <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">
                                Modifica
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>