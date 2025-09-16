<section class="container-fluid py-5 position-relative" style="background-color:black; color:white;">

    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-0 end-0 translate-middle-x"
        style="z-index: 0; opacity: 0.05; width: 120%; max-width: 300px;">
    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute bottom-0 start-0 translate-middle-x"
        style="z-index: 0; opacity: 0.05; width: 120%; max-width: 300px;">

    <div class="container position-relative" style="z-index:1;">
        <div class="mb-5 text-center">
            <h2 class="fw-bold" style="color:#00ff66;">PUBLICATIONS</h2>
            <hr class="border-2 mx-auto" style="border-color:#00ff66; width:220px;">
            <p class="text-white">Some of my published works, research, and contributions.</p>
        </div>

        <div class="row g-4">
            @foreach($publications as $pub)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm"
                    style="background: linear-gradient(145deg, #0b0b0b, #141414); border-radius: 12px; overflow:hidden;">

                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold mb-2" style="color:#00ff66;">{{ $pub['title'] }}</h5>
                        <p class="mb-2 text-white">
                            {{ $pub['publisher'] }} <br>
                            <small class="text-secondary">Published: {{ $pub['year'] }}</small>
                        </p>
                        <div class="mt-auto">
                            <a href="{{ $pub['link'] }}" target="_blank" 
                               class="btn btn-sm w-100 fw-bold"
                               style="background:#00ff66; color:black; border-radius:8px;">
                                📄 View Publication
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
