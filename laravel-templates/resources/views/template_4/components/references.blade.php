<section class="container my-5">
    <h2 class="display-5 fw-bold mb-4 text-center" style="color:#f47360;">
        References
    </h2>

    <div class="row justify-content-center g-4">
        @foreach($references as $reference)
            <div class="col-12 col-md-6">
                <div class="p-4 h-100 text-center"
                     style="background:#2f343b; border-radius:15px; color:white;">

                    <h5 class="fw-bold mb-1" style="color:#f47360;">
                        {{ $reference['name'] }}
                    </h5>
                    <p class="mb-1" style="font-size:1rem;">
                        {{ $reference['position'] }} at {{ $reference['company'] }}
                    </p>

                    <p class="mb-0" style="font-size:0.9rem;">
                        <i class="fas fa-envelope me-2" style="color:#f47360;"></i>
                        {{ $reference['email'] }}
                    </p>
                    <p class="mb-0" style="font-size:0.9rem;">
                        <i class="fas fa-phone me-2" style="color:#f47360;"></i>
                        {{ $reference['phone'] }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>
