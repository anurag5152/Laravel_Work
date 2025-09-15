<section class="publications-section py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Publications 📚</h2>
        <div class="row g-4">
            @foreach ($publications as $publication)
            <div class="col-md-6">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body text-dark">
                        <h5 class="fw-bold">{{ $publication['title'] }}</h5>
                        <p class="text-muted">{{ $publication['journal'] }} · {{ $publication['year'] }}</p>
                        <p>{{ $publication['summary'] }}</p>
                    </div>
                    <div class="card-footer bg-#808080 d-flex justify-content-between">
                        <a href="{{ $publication['link'] }}" target="_blank" class="btn btn-light btn-sm" style="border: 2px solid black;">Read</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>