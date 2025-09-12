<section class="hobbies-section py-5" 
         style="background: url('{{ asset('images/bg10.png') }}') no-repeat center center/cover;">
    <div class="container text-white">
        <h2 class="fw-bold text-center mb-5 hobbies-title">Hobbies</h2>

        <div class="row justify-content-center">
            @foreach($hobbies as $hobby)
                <div class="col-md-3 col-6 mb-4 hobbies-card">
                    <div class="p-4 bg-dark bg-opacity-50 rounded shadow text-center h-100">
                        <div class="mb-3">
                            <i class="bi bi-star fs-2"></i>
                        </div>
                        <h6 class="fw-bold mb-1">{{ $hobby['name'] }}</h6>
                        <p class="small mb-0">{{ $hobby['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
