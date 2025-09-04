<section class="container-fluid py-5" style="background-color:#0c1b33; color:white;">
    <div class="container">
        
        <div class="mb-5 text-center">
            <h2 class="fw-bold" style="font-size:2.5rem; font-family: 'Magra', sans-serif;">
                Volunteer Experience
            </h2>
            <hr class="mx-auto" style="border:2px solid #00b4d8; width:30%;">
        </div>

        <div class="row g-4">
            @foreach($volunteers as $volunteer)
                <div class="col-md-4">
                    <div class="p-4 h-100 rounded shadow" style="background-color:#1c2a4a;">
                        <h5 class="fw-bold mb-2" style="color:#00b4d8; font-family: 'Magra', sans-serif;">
                            {{ $volunteer['role'] }}
                        </h5>
                        <p class="mb-1 fw-bold">{{ $volunteer['organization'] }}</p>
                        <p class="mb-1"><small>{{ $volunteer['duration'] }}</small></p>
                        <p>{{ $volunteer['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
