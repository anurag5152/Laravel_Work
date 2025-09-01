<section class="container my-5 position-relative" x-data>
    <h2 class="display-5 fw-bold text-center mb-5">
        <span class="text-primary">Education</span>
        <hr class="border-2 mx-auto" style="border-color:#4169E1; width:220px;">
    </h2>

    <div class="row text-white">
        @foreach($education as $edu)
            <div class="col-md-6 d-flex mb-4">
                <div class="me-3">
                    <img src="{{ asset('images/Push pin.png') }}" alt="Education Icon" style="width:30px; height:30px; border-radius:50%">
                </div>
                <div>
                    <h5 class="mb-1 fw-bold" style="font-size: 30px;">{{ $edu['university'] }}</h5>
                    <p class="mb-1">{{ $edu['degree'] }}</p>
                    <small class="text-white">{{ $edu['year'] }}</small>
                </div>
            </div>
        @endforeach
    </div>
</section>
