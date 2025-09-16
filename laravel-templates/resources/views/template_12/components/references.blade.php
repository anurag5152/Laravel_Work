<section class="container-fluid py-5 text-center"
         style="background-image: url('{{ asset('images/bg12.png') }}'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat; position: relative; color:white;">
    <h2 class="fw-bold text-center mb-5" style="font-family: 'Georgia', serif;">
        References
    </h2>

    <div class="row g-4 justify-content-center">
        @foreach($references as $reference)
            <div class="col-md-6">
                <div class="card h-100 shadow border-0 rounded-4 p-4">
                    <p class="fst-italic" style="color:#70635C;">“{{ $reference['quote'] }}”</p>
                    <div class="mt-3 d-flex align-items-center">
                        <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                             style="width:50px; height:50px; background-color:#A9876D; color:white; font-size:1.2rem;">
                            {{ strtoupper(substr($reference['name'], 0, 1)) }}
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold" style="color:#A9876D;">{{ $reference['name'] }}</h6>
                            <small class="text-muted">{{ $reference['position'] }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
