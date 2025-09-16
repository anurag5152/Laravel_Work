<section class="container-fluid py-5 text-center"
         style="background-image: url('{{ asset('images/bg12.png') }}'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat; position: relative; color:white;">
    <h2 class="fw-bold text-center mb-5" style="font-family: 'Georgia', serif;">
        Awards
    </h2>

    <div class="row g-4 justify-content-center">
        @foreach($awards as $award)
            <div class="col-md-4">
                <div class="card h-100 shadow border-0 rounded-4 text-center p-4"
                     style="border-top: 6px solid #A9876D;">
                    <div class="mb-3" style="font-size:2rem;">🏅</div>
                    <h5 class="fw-bold" style="color:#A9876D;">{{ $award['title'] }}</h5>
                    <p class="mb-1" style="color:#70635C;">{{ $award['organization'] }}</p>
                    <small class="text-muted">{{ $award['year'] }}</small>
                    <p class="mt-3">{{ $award['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
