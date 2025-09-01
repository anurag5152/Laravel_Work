<section class="container-fluid py-5">
    <div class="container">
        <div class="mb-4 text-center">
            <h2 class="fw-bold" style="color:#4169E1;">REFERENCES</h2>
            <hr class="border-2 mx-auto" style="border-color:#4169E1; width:220px;">
        </div>

        <div class="row">
            @foreach($references as $ref)
            <div class="col-md-6 mb-4">
                <div class="p-3 border border-2 rounded shadow-sm h-100 bg-dark" style="color:white; border-color:#4169E1 !important; background-color:#1f2937;">
                    <h5 class="fw-bold mb-1">{{ $ref['name'] }}</h5>
                    <p class="mb-1">{{ $ref['position'] }} - {{ $ref['company'] }}</p>
                    <p class="mb-1">
                        <i class="bi bi-envelope-fill text-success"></i> 
                        <a href="mailto:{{ $ref['email'] }}" style="color:#4169E1; text-decoration: none;">
                            {{ $ref['email'] }}
                        </a>
                    </p>
                    <p class="mb-0"><i class="bi bi-telephone-fill text-success"></i> {{ $ref['phone'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
