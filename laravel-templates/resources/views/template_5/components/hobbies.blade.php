<section class="container-fluid py-5" style="background-color:#0c1b33; color:white;">
    <div class="container">

        <div class="mb-5 text-center">
            <h2 class="fw-bold" style="font-size:2.5rem; font-family: 'Magra', sans-serif;">
                Hobbies
            </h2>
            <hr class="mx-auto" style="border:2px solid #00b4d8; width:14%;">
        </div>

        <div class="row g-4">
            @foreach($hobbies as $hobby)
                <div class="col-md-3">
                    <div class="p-4 h-100 text-center rounded shadow" style="background-color:#1c2a4a;">
                        <div class="mb-3">
                            <i class="{{ $hobby['icon'] }}" style="font-size:2rem; color:#00b4d8;"></i>
                        </div>
                        <h6 class="fw-bold mb-0" style="font-family: 'Magra', sans-serif;">
                            {{ $hobby['name'] }}
                        </h6>
                        <p class="mt-2 mb-0">{{ $hobby['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
