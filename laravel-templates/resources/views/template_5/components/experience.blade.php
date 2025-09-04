<section class="container my-5">
    <h2 class="display-5 fw-bold text-white text-center mb-4">WORK EXPERIENCE</h2>
    <hr class="mx-auto" style="border:2px solid highlight; width:30%">

    <div class="text-white">
        @foreach($experiences as $exp)
            <div class="row mb-5">
                <div class="col-md-4">
                    <h5 class="fw-bold" style="font-size: 2rem; ">{{ $exp['title'] }}</h5>
                    <h5 class="fw-bold" style="font-size: 1.5rem;">{{ $exp['job_type'] }}</h5>
                    <small class="text-white" style="font-size: 1.2rem;">{{ $exp['duration'] }}</small>
                </div>

                <div class="col-md-8">
                    <h6 class="fw-bold" style="font-size: 2rem; border-bottom: 2px solid white">{{ $exp['company'] }}</h6>
                    <p class="mb-1" style="font-size: 1.5rem;">{{ $exp['description'] }}</p>
                    <p class="text-info mb-0" style="font-size: 1.2rem;">
                        <i class="bi bi-geo-alt-fill"></i> {{ $exp['location'] }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>
