<x-layout>
    <div class="container py-5">

        <h1 class="mb-4">Modifica articolo</h1>

        <form action="{{ route('articles.update', $article) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" value="{{ $article->title }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Contenuto</label>
                <textarea name="content" rows="6" class="form-control">{{ $article->content }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label d-block">Tag</label>

                @foreach($tags as $tag)
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="tags[]"
                            value="{{ $tag->id }}"
                            id="tag{{ $tag->id }}"
                            {{ $article->tags->contains($tag->id) ? 'checked' : '' }}
                        >
                        <label class="form-check-label" for="tag{{ $tag->id }}">
                            {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
            </div>

            <button class="btn btn-travel">Aggiorna</button>

        </form>

    </div>
</x-layout>