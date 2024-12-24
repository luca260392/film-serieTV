<x-layout>
    <!-- Header con immagine di sfondo -->
    @php
        $filename = str_replace(' ', '', $film['title']);
        $filename = lcfirst($filename);
    @endphp

    <header class="film-detail-header position-relative mb-5">
        <img src="/media/headFilm/{{ $filename }}2.webp" alt="{{ $film['title'] }}" class="header-image">
        <div class="header-overlay"></div>
        <div class="container-fluid px-4">
            <h1 class="film-header-title display-2">{{ $film['title'] }}</h1>
        </div>
    </header>

    <!-- Contenuto principale -->
    <div class="container-fluid px-4 mb-5">
        <div class="row">
            <div class="col-12 col-lg-8">

                <!-- Info principali -->
                <div class="film-details mb-5">
                    <div class="detail-section mb-4">
                        <div class="detail-label">DIRECTED BY</div>
                        <div class="detail-value">{{ $film['director'] }}</div>
                    </div>

                    <div class="detail-section mb-4">
                        <div class="detail-label">RELEASE DATE</div>
                        <div class="detail-value">{{ $film['year'] }}</div>
                    </div>

                    <div class="detail-section mb-4">
                        <div class="detail-label">DURATION</div>
                        <div class="detail-value">{{ $film['duration'] }} min</div>
                    </div>

                    <div class="detail-section mb-4">
                        <div class="detail-label">GENRE</div>
                        <div class="detail-value">{{ $film['genre'] }}</div>
                    </div>

                    <div class="detail-section mb-4">
                        <div class="detail-label">PRODUCER</div>
                        <div class="detail-value">{{ $film['producer'] }}</div>
                    </div>
                </div>

                <!-- Plot -->
                <div class="film-plot">
                    <p class="lead">{{ $film['plot'] }}</p>
                </div>
            </div>
        </div>

        <!-- Share section -->
        <div class="share-section mt-5">
            <span class="share-label me-3">SHARE</span>
            <div class="share-links">
                <a href="#" class="me-3">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="#" class="me-3">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="#" class="me-3">
                    <i class="fa-regular fa-envelope"></i>
                </a>
            </div>
        </div>

        <!-- Back button -->
        <div class="back-section mt-5">
            <a href="{{ route('movies.index') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left me-2"></i>Torna alla list dei film
            </a>
        </div>
    </div>
</x-layout>