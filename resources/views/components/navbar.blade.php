<nav class="navbar navbar-expand-lg bg-white py-3">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center">
            <button class="btn p-0 me-2 menu-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <a href="#" class="text-decoration-none text-dark fw-bold menu-button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas">
                <p class="mb-0 textMenuNavbar">MENU</p>
            </a>
        </div>
        <a href="/" class="text-decoration-none text-dark">
            <h2 class="mb-0 mx-auto fw-bold">M263</h2>
        </a>
        <button class="btn p-0 menu-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchOffcanvas">
            <span class="material-symbols-outlined">search</span>
        </button>
    </div>
</nav>


<div class="offcanvas offcanvas-start bg-black" tabindex="-1" id="menuOffcanvas">
    <div class="offcanvas-header">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex flex-column">
            <a href="{{route('movies.index')}}" class="menu-link text-white text-decoration-none mb-4 fs-1">Film</a>
            <a href="{{route('tvseries.index')}}" class="menu-link text-white text-decoration-none mb-4 fs-1">Serie TV</a>
            <a href="#" class="menu-link text-white text-decoration-none mb-4 fs-1">Attori</a>
            <a href="#" class="menu-link text-white text-decoration-none mb-4 fs-1">Attrici</a>
            <a href="#" class="menu-link text-white text-decoration-none mb-4 fs-1">Registi</a>
            <a href="#" class="menu-link text-white text-decoration-none mb-4 fs-1">App</a>
            <a href="#" class="menu-link text-white text-decoration-none mb-4 fs-1">Shop</a>
            <a href="{{route('contact')}}" class="menu-link text-white text-decoration-none mb-4 fs-1">Contattaci</a>
        </div>
    </div>
</div>



<!-- Search Offcanvas -->
<div class="offcanvas offcanvas-top h-30 bg-black" tabindex="-1" id="searchOffcanvas">
    <div class="offcanvas-header justify-content-end">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="position-relative">
                        <input type="text" class="form-control form-control-lg bg-transparent text-white border-0 border-bottom rounded-0" placeholder="Cerca...">
                        <button class="btn position-absolute end-0 top-50 translate-middle-y text-white">
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>