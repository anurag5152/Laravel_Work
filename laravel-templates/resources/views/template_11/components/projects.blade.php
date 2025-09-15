<section class="projects-section py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Projects</h2>

        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card shadow-lg border-0 h-100">
                        <div style="height: 250px; overflow: hidden;">
                            <img src="{{ $project['image'] }}" 
                                 class="card-img-top w-100 h-100" 
                                 alt="{{ $project['title'] }}"
                                 style="object-fit: cover;">
                        </div>

                        <div class="card-body text-dark">
                            <h5 class="fw-bold">{{ $project['title'] }}</h5>
                            <h5>{{ $project['desc'] }}</h5>
                        </div>

                        <div class="card-footer bg-#808080 d-flex justify-content-between">
                            <a href="{{ $project['github'] }}" target="_blank" class="btn btn-dark btn-sm">Github</a>
                            <a href="{{ $project['preview'] }}" target="_blank" class="btn btn-light btn-sm">Preview</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



