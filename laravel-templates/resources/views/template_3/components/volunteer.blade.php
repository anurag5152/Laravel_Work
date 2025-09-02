<section class="container my-5">
    <h2 class="display-5 fw-bold text-white text-center mb-4">VOLUNTEER EXPERIENCE</h2>
    <hr class="border-light mb-5" style="width: 35%; margin: auto;">

    <div class="text-white">
        @foreach($volunteers as $volunteer)
            <div class="row mb-5">
                <!-- Left side -->
                <div class="col-md-4">
                    <h5 class="fw-bold" style="font-size: 2rem;">{{ $volunteer['title'] }}</h5>
                    <small class="text-white" style="font-size: 1.2rem;">{{ $volunteer['duration'] }}</small>
                </div>

                <!-- Right side -->
                <div class="col-md-8">
                    <h6 class="fw-bold" style="font-size: 2rem;">{{ $volunteer['organization'] }}</h6>
                    <p class="mb-1" style="font-size: 1.5rem;">{{ $volunteer['description'] }}</p>
                    <p class="text-info mb-0">
                        <i class="bi bi-geo-alt-fill" style="font-size: 1.2rem;"></i> {{ $volunteer['location'] }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>
