<section class="py-5" style="background-color: #1a1a1a;">
    <div class="container">
        <h2 class="fw-bold text-center mb-4" style="font-family: 'Amaranth', sans-serif;">
            Experience
        </h2>
        <hr class="mx-auto" style="border:3px solid #4462ff; width:10vw;">

        <div class="row g-4 justify-content-center">
            @foreach($experiences as $exp)
                <div class="col-md-4">
                    <div class="p-4 h-100"
                         style="border:2px solid #3c3cff; border-radius:15px; background-color:transparent;">
                        <small class="d-block mb-2">
                            {{ $exp['year'] }} &nbsp; {{ $exp['position'] }}
                        </small>
                        <h5 class="fw-bold mb-2 text-primary">
                            {{ strtoupper($exp['company']) }}
                        </h5>
                        <p class="mb-0">
                            {{ $exp['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
