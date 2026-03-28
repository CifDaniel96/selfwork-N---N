<x-layout>
    <div class="container py-5">

        <h1 class="mb-4">Nuovo articolo</h1>

        <form action="{{ route('articles.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Contenuto</label>
                <textarea name="content" rows="6" class="form-control"></textarea>
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
                        >
                        <label class="form-check-label" for="tag{{ $tag->id }}">
                            {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
            </div>

            <button class="btn btn-travel">Salva</button>
        </form>

    </div>
</x-layout>