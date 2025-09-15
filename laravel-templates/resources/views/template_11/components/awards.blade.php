<section class="py-5" style="color:white;">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Awards 🏆</h2>
        <div class="row justify-content-center">
            @foreach($awards as $award)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-lg" style="border-radius: 15px; overflow:hidden;">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ $award['title'] }}</h5>
                            <p class="text-muted">{{ $award['description'] }}</p>
                            <small class="text-secondary">{{ $award['year'] }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
