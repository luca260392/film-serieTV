<x-layout>
    <!-- Header -->
    <header class="hero-header mb-5"></header>

    <!-- Alert Messages -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Content Sections -->
    <div class="container-fluid px-5 content-sections">
        @foreach($sections as $section)
            <div class="content-row">
                <div class="row align-items-center {{ $section['reverse'] ? 'flex-row-reverse' : '' }}">
                    <div class="col-md-8">
                        <div class="content-image {{ $section['has_color_border'] ? 'color-border' : '' }}">
                            <img src="{{ asset($section['image']) }}" alt="{{ $section['alt'] }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 {{ $section['reverse'] ? 'pe-md-5' : 'ps-md-5' }}">
                        <span class="text-uppercase small mb-2 d-block category-text">{{ $section['category'] }}</span>
                        <h2 class="display-5 mb-4">{{ $section['title'] }}</h2>
                        <a href="{{ $section['link'] }}" class="text-dark text-decoration-none">
                            {{ $section['cta_text'] }}
                            <span class="material-symbols-outlined ms-2">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>

