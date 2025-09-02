<section class="container my-5">
    <h2 class="display-5 fw-bold text-white text-center mb-4">AWARDS</h2>
    <hr class="border-light mb-5" style="width: 15%; margin: auto;">

    <div class="text-white">
        @foreach($awards as $award)
            <div class="row mb-4 align-items-center">
                <!-- Left side (Year) -->
                <div class="col-md-3 text-md-end text-center mb-2 mb-md-0">
                    <span class="badge bg-info text-dark px-3 py-2 fs-5">
                        {{ $award['year'] }}
                    </span>
                </div>

                <!-- Right side (Award details) -->
                <div class="col-md-9">
                    <h4 class="fw-bold" style="font-size: 1.8rem;">{{ $award['title'] }}</h4>
                    <h6 class="text-info" style="font-size: 1.2rem;">{{ $award['organization'] }}</h6>
                    <p style="font-size: 1.3rem;">{{ $award['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
