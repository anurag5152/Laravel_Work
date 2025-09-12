<section class="references-section py-5">
    <div class="container">
        <h2 class="fw-bold ref-title text-center mb-5">References</h2>

        <div class="row g-4">
            @foreach($references as $ref)
                <div class="col-md-6 ref-card">
                    <div class="p-4 bg-dark bg-opacity-50 rounded shadow-lg h-100">
                        <h5 class="fw-bold mb-1">{{ $ref['name'] }}</h5>
                        <p class="mb-1">{{ $ref['position'] }} @ {{ $ref['company'] }}</p>
                        <p class="small mb-1">
                            <i class="bi bi-envelope-fill me-2"></i> {{ $ref['email'] }}
                        </p>
                        <p class="small mb-0">
                            <i class="bi bi-telephone-fill me-2"></i> {{ $ref['phone'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
