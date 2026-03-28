<x-layout>
    <section class="hero-section py-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                
                <div class="col-12 col-lg-7">
                    <span class="travel-badge mb-3 d-inline-block">Blog di viaggi</span>

                    <h1 class="display-3 fw-bold mb-4">
                        Ogni viaggio merita di essere raccontato
                    </h1>

                    <p class="lead text-secondary mb-4">
                        Itinerari, idee, consigli e storie da tutto il mondo. 
                        Scopri nuove destinazioni e condividi le tue esperienze.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('articles.index')}}" class="btn btn-travel btn-lg rounded-pill px-4">
                            Esplora articoli
                        </a>
                        <a href="{{ route('articles.create')}}" class="btn btn-outline-dark btn-lg rounded-pill px-4">
                            Scrivi il tuo viaggio
                        </a>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="travel-card p-4">
                        <h3 class="fw-bold mb-3">Destinazioni popolari</h3>

                        <div class="d-flex flex-wrap gap-2">
                            <span class="tag-pill">Europa</span>
                            <span class="tag-pill">America</span>
                            <span class="tag-pill">Asia</span>
                            <span class="tag-pill">Oceania</span>
                            <span class="tag-pill">Africa</span>
                            <span class="tag-pill">Weekend</span>
                            <span class="tag-pill">Mare</span>
                            <span class="tag-pill">Avventura</span>
                            <span class="tag-pill">Divertimento</span>
                            <span class="tag-pill">Low cost</span>
                            <span class="tag-pill">Relax</span>
                            <span class="tag-pill">Cultura</span>
                        </div>

                        <hr>

                        <p class="text-secondary mb-0">
                            Organizza i tuoi articoli per tag e rendi ogni esperienza facile da ritrovare.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>