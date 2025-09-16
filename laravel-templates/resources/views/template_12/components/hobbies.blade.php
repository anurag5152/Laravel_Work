<section class="container-fluid py-5 text-center">
    
    <!-- Overlay -->
    <div style="position:absolute; inset:0; background:rgba(0,0,0,0.6);"></div>

    <div class="container position-relative">
        <h2 class="fw-bold mb-5" style="font-family: 'Georgia', serif;">
            Hobbies
        </h2>

        <div class="row g-4 justify-content-center">
            @foreach($hobbies as $hobby)
                <div class="col-md-3">
                    <div class="card h-100 border-0 rounded-4 shadow text-center p-4"
                         style="background: rgba(255,255,255,0.1); color:black;">
                        <div style="font-size:2rem;" class="mb-3">{{ $hobby['emoji'] }}</div>
                        <h6 class="fw-bold">{{ $hobby['name'] }}</h6>
                        <p class="small">{{ $hobby['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
