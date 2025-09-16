<section class="container-fluid py-5" 
         style="background-image: url('{{ asset('images/bg12.png') }}'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat; color:white;">
    
    <div class="container">
        <h2 class="fw-bold text-center mb-5" style="font-family: 'Georgia', serif;">
            Volunteer
        </h2>

        <div class="row g-4">
            @foreach($volunteers as $volunteer)
                <div class="col-md-6">
                    <div class="card shadow border-0 h-100 rounded-4 overflow-hidden">
                        <div class="card-body d-flex">
                            <div class="me-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                     style="width:60px; height:60px; background-color:#A9876D; font-size:1.5rem;">
                                    {{ $volunteer['emoji'] }}
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold" style="color:#A9876D;">{{ $volunteer['role'] }}</h5>
                                <p class="mb-1 fw-semibold" style="color:#70635C;">{{ $volunteer['organization'] }}</p>
                                <small class="text-muted">{{ $volunteer['year'] }}</small>
                                <p class="mt-2">{{ $volunteer['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
