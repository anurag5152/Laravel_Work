<section class="container-fluid py-5 position-relative" style="background-color:black; color:white;">

    {{-- Right side overlapping images --}}
    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-0 end-0"
        style="z-index: 0; opacity: 0.1; width: 120%; max-width: 300px;">

    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-25 end-0"
        style="z-index: 0; opacity: 0.08; width: 120%; max-width: 300px;">
    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-20 start-80 translate-middle-x"
        style="z-index: 0; opacity: 0.1; width: 80%; max-width: 200px;">

    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-20 start-80 translate-middle-x"
        style="z-index: 0; opacity: 0.1; width: 80%; max-width: 200px;">
    <div class="container">
        <div class="mb-4 text-center">
            <h2 class="fw-bold" style="color:#00ff66;">VOLUNTEER EXPERIENCE</h2>
            <hr class="border-2 mx-auto" style="border-color:#00ff66; width:400px;">
        </div>

        <div class="row">
            @foreach($volunteers as $vol)
            <div class="col-md-6 mb-4 p-4">
                <div class="d-flex flex-column h-100">
                    <div class="mb-2">
                        <h5 class="fw-bold mb-1">
                            <a href="#" class="text-decoration-none text-white">{{ $vol['role'] }}</a>
                        </h5>
                        <small class="text-white">{{ $vol['duration'] }}</small>
                        <hr class="border-2 " style="border-color:#00ff66; width:130px;">
                    </div>

                    <div>
                        <h6 class="fw-bold">{{ $vol['organization'] }}</h6>
                        <p class="mb-1">{{ $vol['description'] }}</p>
                        <p class="mb-0">
                            <i class="bi bi-geo-alt-fill text-success"></i> {{ $vol['location'] }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>