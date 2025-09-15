<section class="volunteer-section py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Volunteer 🤝</h2>
        <div class="row g-4">
            @foreach ($volunteers as $volunteer)
                <div class="col-md-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ $volunteer['image'] }}" 
                                 class="card-img-top w-100 h-100"
                                 alt="{{ $volunteer['title'] }}"
                                 style="object-fit: cover;">
                        </div>
                        <div class="card-body text-dark">
                            <h5 class="fw-bold">{{ $volunteer['title'] }}</h5>
                            <p class="text-muted">{{ $volunteer['organization'] }} · {{ $volunteer['duration'] }}</p>
                            <p>{{ $volunteer['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
