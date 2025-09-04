<section class="container-fluid py-5" style="background-color:#0c1b33; color:white;">
    <div class="container">
        
        <div class="mb-5 text-center">
            <h2 class="fw-bold" style="font-size:2.5rem; font-family: 'Magra', sans-serif;">
                Publications
            </h2>
            <hr class="mx-auto" style="border:2px solid #00b4d8; width:200px;">
        </div>

        <div class="row g-4">
            @foreach($publications as $pub)
                <div class="col-md-6">
                    <div class="p-4 h-100 rounded shadow" style="background-color:#1c2a4a;">
                        <h5 class="fw-bold mb-2" style="color:#00b4d8; font-family: 'Magra', sans-serif;">
                            {{ $pub['title'] }}
                        </h5>
                        <p class="mb-1"><strong>Authors:</strong> {{ $pub['authors'] }}</p>
                        <p class="mb-1"><strong>Published In:</strong> {{ $pub['journal'] }}</p>
                        <p class="mb-1"><small>{{ $pub['year'] }}</small></p>
                        <a href="{{ $pub['link'] }}" target="_blank" class="fw-bold text-decoration-none" style="color:#00b4d8;">
                            View Publication <i class="bi bi-box-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
