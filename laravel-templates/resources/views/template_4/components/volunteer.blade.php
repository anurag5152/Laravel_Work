<section class="container my-5">
    <h2 class="display-5 fw-bold mb-4 text-center" style="color:#f47360;">
        Volunteer Experience
    </h2>

    <div class="row justify-content-center g-4">
        @foreach($volunteers as $volunteer)
            <div class="col-12 col-md-6 d-flex">
                <div class="w-100 d-flex flex-column"
                     style="background:#2f343b; border-radius:15px; overflow:hidden; position:relative;">

                    <div class="p-3 text-center d-flex align-items-center justify-content-center"
                         style="background:#f47360; color:white; min-width:180px;">
                        <h5 class="fw-bold mb-0">{{ $volunteer['role'] }}</h5>
                    </div>
                    <div class="p-3 flex-grow-1" style="color:white;">
                        <h6 class="fw-bold mb-1" style="color:#f47360;">
                            {{ $volunteer['organization'] }}
                        </h6>
                        <p class="mb-1" style="font-size:0.95rem;">{{ $volunteer['description'] }}</p>
                        <small class="text-white">{{ $volunteer['year'] }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
