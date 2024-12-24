<x-layout>
    <div class="container-fluid px-4">
        <div class="row mt-5">
            <!-- Header della pagina -->
            <div class="col-12 mb-4">
                <h1 class="display-4 header-filmIndex">Film</h1>
            </div>
        </div>

        <!-- Griglia Film -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($movies as $movie)
                @php
                    $filename = str_replace(' ', '', $movie['title']);
                    $filename = lcfirst($filename);
                @endphp

                <div class="col">
                    <div class="card-filmIndex">
                        <!-- Immagine Film -->
                        <div class="imageContainer-filmIndex position-relative mb-3">
                            <img src="/media/listaFilm/{{ $filename }}.webp"
                                 alt="{{ $movie['title'] }}"
                                 class="image-filmIndex">

                            <!-- Overlay con informazioni -->
                            <div class="overlay-filmIndex">
                                <div class="info-filmIndex">
                                    <div class="infoCategory-filmIndex">RELEASE DATE</div>
                                    <div class="infoValue-filmIndex mb-4">{{ $movie['year'] }}</div>

                                    <div class="infoCategory-filmIndex">WRITTEN AND DIRECTED BY</div>
                                    <div class="infoValue-filmIndex mb-4">{{ $movie['director'] }}</div>

                                    <div class="infoCategory-filmIndex">DURATION</div>
                                    <div class="infoValue-filmIndex">{{ $movie['duration'] }} min</div>
                                </div>
                            </div>
                        </div>

                        <!-- Titolo Film cliccabile -->
                        <a href="{{ route('movies.show', $movie['id']) }}" class="text-dark text-decoration-none">
                            <h2 class="title-filmIndex h5">{{ $movie['title'] }}</h2>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>