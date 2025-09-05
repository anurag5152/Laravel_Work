<section class="py-5 text-center">
    <div class="container">

        <h2 class="fw-bold mb-4">References</h2>
        <hr class="mx-auto" style="border:2px solid #C16078; width:16%;">
        <div class="row g-4 justify-content-center">
            @foreach($references as $ref)
            <div class="col-md-4">
                <div class="p-4 rounded shadow-sm h-100 text-start"
                    style="background-color:#F2CABB; border:2px solid #C16078;">

                    <h5 class="fw-bold mb-1">{{ $ref['name'] }}</h5>
                    <p class="text-muted mb-1">{{ $ref['position'] }} | {{ $ref['company'] }}</p>

                    <div class="mt-3 small">
                        <p class="mb-1"><strong>Email:</strong> {{ $ref['email'] }}</p>
                        <p class="mb-0"><strong>Phone:</strong> {{ $ref['phone'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>