<section class="awards-section py-5">
    <div class="container">
        <h2 class="fw-bold award-title text-center mb-5">Awards</h2>

        <div class="row g-4">
            @foreach($awards as $award)
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 award-card">
                        <div class="card-body text-dark">
                            <h5 class="fw-bold">{{ $award['title'] }}</h5>
                            <p class="mb-1">{{ $award['organization'] }}</p>
                            <span class="badge bg-primary">{{ $award['year'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
