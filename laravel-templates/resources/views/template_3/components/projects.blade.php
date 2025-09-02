<section class="container-fluid py-5 position-relative">

    <div class="container">
        <div class="mb-4 text-center">
            <h2 class="display-5 fw-bold text-white text-center mb-4">Projects</h2>
    <hr class="border-light mb-5" style="width: 14%; margin: auto;">
        </div>


        <div class="row">
            @foreach($projects as $index => $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border border-1"
                    style="border-color:#00ff66; background-color:#1f2937; color:white;">
                    <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}" style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <p style="border: 1px solid white"></p>
                        <h5 class="fw-bold" style="font-size: 1.8rem;">{{ $project['title'] }}</h5>
                        <p class="mb-2" style="font-size: 1.5rem;">{{ $project['short_desc'] }}</p>
                        <p class="text-white small" style="font-size: 1.2rem;">{{ $project['tech_stack'] }}</p>
                        <button class="btn btn-sm btn-success"  style="font-size : 1.2rem; background-color: #4169E1"
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
                    <div class="modal-content" style="background-color:#1f2937; color:white; border:2px solid #4169E1;">
                        <div class="modal-header">
                            <h5 class="modal-title" >{{ $project['title'] }}</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ $project['image'] }}" class="proj-img mb-3 rounded" alt="{{ $project['title'] }}">
                            <p class="text-white"><strong>Description:</strong> {{ $project['description'] }}</p>
                            <p><strong>Tech Stack:</strong> {{ $project['tech_stack'] }}</p>
                            @if(!empty($project['link']))
                            <a href="{{ $project['link'] }}" target="_blank" class="btn btn-outline-success" style="color: #4169E1; border-color:#4169E1">Visit Project</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>