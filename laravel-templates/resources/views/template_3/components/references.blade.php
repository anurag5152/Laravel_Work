<section class="container my-5">
    <h2 class="display-5 fw-bold text-white text-center mb-4">REFERENCES</h2>
    <hr class="border-light mb-5" style="width: 20%; margin: auto;">

    <div class="row g-4 text-white">
        @foreach($references as $ref)
            <div class="col-md-6">
                <div class="p-4 h-100 rounded shadow-lg bg-dark bg-opacity-50">
                    <h5 class="fw-bold mb-1" style="font-size: 2rem;">{{ $ref['name'] }}</h5>
                    <p class="mb-1" style="font-size: 1.5rem;">{{ $ref['position'] }} <span class="text-info">|</span> {{ $ref['company'] }}</p>
                    <p class="mb-1" style="font-size: 1.2rem;"><i class="bi bi-envelope-fill text-info"></i> {{ $ref['email'] }}</p>
                    <p class="mb-0" style="font-size: 1.2rem;"><i class="bi bi-telephone-fill text-info"></i> {{ $ref['phone'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
