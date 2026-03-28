<x-layout>
    <div class="container py-5">

        <h1 class="mb-4">Nuovo tag</h1>

        <form action="{{ route('tags.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nome tag</label>
                <input type="text" name="name" class="form-control">
            </div>

            <button class="btn btn-travel">Salva tag</button>

        </form>

    </div>
</x-layout>