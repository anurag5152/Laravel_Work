<section class="container-fluid py-5 position-relative">

    <div class="container">
        <div class="mb-4 text-center">
            <h2 class="fw-bold" style="color:#4169E1;">VOLUNTEER EXPERIENCE</h2>
            <hr class="border-2 mx-auto" style="border-color:#4169E1; width:400px;">
        </div>

        <div class="row">
            @foreach($volunteers as $vol)
            <div class="col-md-6 mb-4 p-4">
                <div class="d-flex flex-column h-100">
                    <div class="mb-2">
                        <h5 class="fw-bold mb-1">
                            <a href="#" class="text-decoration-none text-#4169E1">{{ $vol['role'] }}</a>
                        </h5>
                        <small class="text-white">{{ $vol['duration'] }}</small>
                        <hr class="border-2 " style="border-color:#4169E1; width:130px;">
                    </div>

                    <div>
                        <h6 class="fw-bold" style="color: white;">{{ $vol['organization'] }}</h6>
                        <p class="mb-1" style="color: white;">{{ $vol['description'] }}</p>
                        <p class="mb-0" style="font-style: italic; color: white;">
                            <i class="bi bi-geo-alt-fill text-success"></i> {{ $vol['location'] }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>