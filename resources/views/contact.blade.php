<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-3 display-3">Contattaci</h2>
                        <p class="text-center text-muted mb-5 fs-5">
                            Facci sapere se hai visto un film o una serie particolarmente "intrippante".
                            Valuteremo se inserire la tua proposta nelle nostre liste!
                        </p>

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3 fs-5">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="mb-3 fs-5">
                                <label for="director" class="form-label">Regista</label>
                                <input type="text" class="form-control" id="director" name="director" required>
                            </div>

                            <div class="mb-5 fs-5">
                                <label for="description" class="form-label">Descrizione</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-dark px-4 py-2 fs-5">
                                    Invia proposta
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>