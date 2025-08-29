<section class="container-fluid py-5 position-relative" style="background-color:black; color:white;">

    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-0 start-80 translate-middle-x"
        style="z-index: 0; opacity: 0.1; width: 80%; max-width: 200px;">

    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-0 start-80 translate-middle-x"
        style="z-index: 0; opacity: 0.1; width: 80%; max-width: 200px;">

    <div class="container">
        <div class="mb-4 text-center">
            <h2 class="fw-bold" style="color:#00ff66;">PROJECTS</h2>
            <hr class="border-2 mx-auto" style="border-color:#00ff66; width:220px;">
        </div>


        <div class="row">
            @foreach($projects as $index => $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border border-1"
                    style="border-color:#00ff66; background-color:#1f2937; color:white;">
                    <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}" style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="fw-bold">{{ $project['title'] }}</h5>
                        <p class="mb-2">{{ $project['short_desc'] }}</p>
                        <p class="text-muted small">{{ $project['tech_stack'] }}</p>
                        <button class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#projectModal{{ $index }}">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            {{-- Modal for Project Details --}}
            <div class="modal fade" id="projectModal{{ $index }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" style="background-color:#1f2937; color:white; border:2px solid #00ff66;">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $project['title'] }}</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ $project['image'] }}" class="img-fluid mb-3 rounded" alt="{{ $project['title'] }}">
                            <p><strong>Description:</strong> {{ $project['description'] }}</p>
                            <p><strong>Tech Stack:</strong> {{ $project['tech_stack'] }}</p>
                            @if(!empty($project['link']))
                            <a href="{{ $project['link'] }}" target="_blank" class="btn btn-outline-success">Visit Project</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>