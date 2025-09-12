<section class="projects-section py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Projects</h2>

        <div class="row g-4">
            @foreach($projects as $project)
                <div class="col-md-4">
                    <div class="card proj-card shadow-sm border-0 h-100 text-white" style="background-color:#1e3c72;">
                        @if(!empty($project['image']))
                            <img src="{{ asset('images/' . $project['image']) }}" 
                                 class="card-img-top" 
                                 alt="{{ $project['title'] }}">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h6 class="card-title">{{ $project['title'] }}</h6>
                            <div class="mt-auto proj-link d-flex gap-2">
                                <a href="{{ $project['github'] }}" target="_blank" 
                                   class="btn btn-sm btn-outline-light">
                                    GitHub
                                </a>
                                <a href="{{ $project['preview'] }}" target="_blank" 
                                   class="btn btn-sm btn-success">
                                    Preview
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
