<section class="experience-section py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">My Experience</h2>
        <div class="row g-4">
            @foreach ($experiences as $experience)
                <div class="col-md-6">
                    <div class="card shadow-lg border-0 h-100 p-4">
                        <div class="card-body text-dark">
                            <h5 class="fw-bold">{{ $experience['role'] }}</h5>
                            <h6 class="text-muted">{{ $experience['company'] }} - {{ $experience['years'] }}</h6>
                            <p>{{ $experience['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if (!empty($images))
            <div class="row g-4 mt-4">
                @foreach ($images as $image)
                    <div class="col-md-6" style="height: 250px; object-fit: cover;">
                        <div class="card shadow-lg border-0 h-100">
                            <img src="{{ $image }}" alt="Experience image" class="img-fluid rounded" style="height: 250px; object-fit: cover;">
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
