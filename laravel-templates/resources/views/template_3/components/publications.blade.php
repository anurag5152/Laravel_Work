<section class="container my-5">
    <h2 class="display-5 fw-bold text-white text-center mb-4">PUBLICATIONS</h2>
    <hr class="border-light mb-5" style="width: 20%; margin: auto;">

    <div class="row">
        @foreach($publications as $pub)
            <div class="col-md-6 mb-4">
                <div 
                    x-data="{ hover: false }" 
                    class="card h-100 bg-dark text-white shadow-lg border-0 rounded-4 p-3" 
                    @mouseenter="hover = true" 
                    @mouseleave="hover = false"
                >
                    <div class="card-body">
                        <h4 class="fw-bold" style="font-size: 1.8rem;">{{ $pub['title'] }}</h4>
                        <p class="mb-1 text-info" style="font-size: 1.2rem;">
                            <i class="bi bi-people-fill"></i> {{ $pub['authors'] }}
                        </p>
                        <p class="mb-1" style="font-size: 1.1rem;">
                            <i class="bi bi-journal-text"></i> {{ $pub['journal'] }} ({{ $pub['year'] }})
                        </p>
                        <p style="font-size: 1.2rem;">{{ $pub['description'] }}</p>
                        <a :class="hover ? 'btn btn-info' : 'btn btn-outline-info'" 
                           href="{{ $pub['link'] }}" 
                           target="_blank">
                            <i class="bi bi-box-arrow-up-right"></i> View Publication
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
