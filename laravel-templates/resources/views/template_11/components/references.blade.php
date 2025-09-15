<section class="py-5" style="color:white;">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">References 👥</h2>
        <div class="row justify-content-center">
            @foreach($references as $ref)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-lg" style="border-radius: 15px; overflow:hidden;">
                        <div class="card-body">
                            <h5 class="fw-bold">👤 {{ $ref['name'] }}</h5>
                            <p class="mb-1">💼 {{ $ref['position'] }}</p>
                            <p class="mb-1">🏢 {{ $ref['company'] }}</p>
                            <p class="mb-1">📧 {{ $ref['email'] }}</p>
                            <p class="mb-1">📞 {{ $ref['phone'] }}</p>
                            <small class="text-muted">"{{ $ref['note'] }}"</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
