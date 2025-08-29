<section class="container-fluid py-5 position-relative" style="background-color:black; color:white;">

    {{-- Right side images --}}
    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-0 end-0 translate-middle-x"
        style="z-index: 0; opacity: 0.1; width: 120%; max-width: 300px;">

    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-0 end-0 translate-middle-x"
        style="z-index: 0; opacity: 0.1; width: 120%; max-width: 300px;">
    <div class="container">
        <div class="mb-4 text-start">
            <h2 class="fw-bold" style="color:#00ff66;">Education</h2>
            <hr class="border-2" style="border-color:#00ff66; width:170px;">
        </div>

        <div class="row align-items-center">
            <div class="col-md-6">
                @foreach($education as $edu)
                <div class="d-flex mb-4 align-items-start">
                    <div class="me-3 d-flex align-items-center">
                        <span class="border border-2 rounded-circle d-inline-block"
                            style="width:20px; height:20px; border-color:#00ff66;"></span>
                    </div>

                    <div class="border rounded p-3 flex-grow-1" style="border-color:#00ff66 !important; background-color:#1f2937;">
                        <h5 class="fw-bold mb-1">{{ $edu['university'] }}</h5>
                        <p class="mb-1">{{ $edu['degree'] }}</p>
                        <small class="text-muted">{{ $edu['year'] }}</small>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-md-6 text-center">
                <img src="/images/edu.png" alt="Education Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>