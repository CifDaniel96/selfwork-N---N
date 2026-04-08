<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm">
    <div class="container py-2">
        <a class="navbar-brand fw-bold fs-3 text-dark" href="{{ route('homepage') }}">
            TravelNotes
        </a>

        <div class="ms-auto d-flex gap-2">
            <a href="{{route ('articles.index')}}" class="btn btn-outline-dark rounded-pill px-4">Articoli</a>
            <a href="{{route ('articles.create')}}" class="btn btn-travel rounded-pill px-4">Nuovo articolo</a>
            <a href="{{ route('tags.create') }}" class="btn btn-travel rounded-pill px-4">Crea Nuovo Tag</a>
        </div>
    </div>
</nav>