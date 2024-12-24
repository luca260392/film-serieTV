<div class="container-fluid mt-5 px-4">
    <!-- Header e Filtri - Stack su mobile -->
    <div class="mb-4 d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
        <!-- Titolo -->
        <div class="mb-3 mb-sm-0">
            <h1 class="display-4 header-serieTV mb-0">Serie TV</h1>
        </div>

        <!-- Filtri - Full width su mobile -->
        <div class="d-flex flex-column flex-sm-row w-50 w-sm-auto ms-sm-auto gap-2 gap-sm-3 filter-serieTV" wire:ignore.self>
            <!-- Filtro per Genere -->
            <div class="dropdown w-100 w-sm-auto">
                <button class="btn btn-dark dropdown-toggle filterButton-serieTV w-100 {{ $genre ? 'active' : '' }}"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="d-inline-block text-truncate">
                        {{ $genre ?: 'Filtra per Genere' }}
                    </span>
                </button>
                <ul class="dropdown-menu w-100">
                    <li><a href="#" class="dropdown-item" wire:click.prevent="toggleGenre('')">Tutti</a></li>
                    @foreach ($genres as $g)
                        <li><a href="#" class="dropdown-item" wire:click.prevent="toggleGenre('{{ $g }}')">{{ $g }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Filtro per Anno -->
            <div class="dropdown w-100 w-sm-auto">
                <button class="btn btn-dark dropdown-toggle filterButton-serieTV w-100"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="d-inline-block">
                        Filtra per Anno di Uscita
                    </span>
                </button>
                <ul class="dropdown-menu w-100">
                    <li><a href="#" class="dropdown-item" wire:click.prevent="toggleSort('asc')">Crescente</a></li>
                    <li><a href="#" class="dropdown-item" wire:click.prevent="toggleSort('desc')">Decrescente</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Griglia Serie TV -->
    <div class="row g-4">
        @foreach ($series as $serie)
            <div class="col-12 col-md-6 col-lg-4" wire:key="serie-{{ $serie->id }}">
                <div class="card-serieTV">
                    <div class="imageContainer-serieTV position-relative mb-3">
                        <img src="/media/tvSeries-img/{{ $serie->poster_image }}"
                             alt="{{ $serie->title }}"
                             class="image-serieTV">

                        <div class="overlay-serieTV">
                            <div class="info-serieTV">
                                <div class="infoCategory-serieTV">GENERE</div>
                                <div class="infoValue-serieTV mb-4">{{ $serie->genre }}</div>

                                <div class="infoCategory-serieTV">ANNO</div>
                                <div class="infoValue-serieTV mb-4">{{ $serie->release_year }}</div>

                                <div class="infoCategory-serieTV">REGISTA</div>
                                <div class="infoValue-serieTV">{{ $serie->director }}</div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="text-dark text-decoration-none">
                        <h2 class="title-serieTV h5">{{ $serie->title }}</h2>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>