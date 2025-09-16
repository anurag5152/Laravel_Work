<section class="container py-5">
    <h2 class="fw-bold text-center mb-5" style="font-family: 'Georgia', serif;">
        Publications
    </h2>
    <div class="row g-4">
        @foreach($publications as $publication)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border-0 rounded-4 overflow-hidden"
                     style="border-top: 6px solid #A9876D;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold" style="color:#A9876D;">
                            {{ $publication['title'] }}
                        </h5>
                        <p class="card-text" style="color:#70635C;">
                            {{ $publication['journal'] }}
                        </p>
                        <small class="mb-2 text-muted">{{ $publication['year'] }}</small>
                        <p class="flex-grow-1">{{ $publication['summary'] }}</p>
                        <a href="{{ $publication['link'] }}" target="_blank"
                           class="btn btn-outline-dark rounded-pill mt-2">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
