<section class="container my-5">
    <h2 class="display-5 fw-bold text-white text-center mb-4">HOBBIES</h2>
    <hr class="border-light mb-5" style="width: 15%; margin: auto;">

    <div class="row g-4 text-white text-center">
        @foreach($hobbies as $hobby)
            <div class="col-md-3 col-sm-6">
                <div class="p-4 h-100 rounded shadow-lg bg-dark bg-opacity-50">
                    <i class="bi {{ $hobby['icon'] }} text-info mb-3" style="font-size: 2.5rem;"></i>
                    <h5 class="fw-bold" style="font-size: 2rem;">{{ $hobby['name'] }}</h5>
                    <p class="small" style="font-size: 1.5rem;">{{ $hobby['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
