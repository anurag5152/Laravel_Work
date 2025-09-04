<section class="container-fluid py-5" style="background-color:#0c1b33; color:white;">
    <div class="container">

        <div class="mb-5 text-center">
            <h2 class="fw-bold" style="font-size:2.5rem; font-family: 'Magra', sans-serif;">
                Awards
            </h2>
            <hr class="mx-auto" style="border:2px solid #00b4d8; width:12%;">
        </div>

        <div class="row g-4">
            @foreach($awards as $award)
                <div class="col-md-4">
                    <div class="p-4 h-100 rounded shadow" style="background-color:#1c2a4a;">
                        <h5 class="fw-bold mb-2" style="color:#00b4d8; font-family: 'Magra', sans-serif;">
                            {{ $award['title'] }}
                        </h5>
                        <p class="mb-1"><strong>Issued by:</strong> {{ $award['issuer'] }}</p>
                        <p class="mb-1"><small>{{ $award['year'] }}</small></p>
                        <p>{{ $award['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
