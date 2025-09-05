<section class="py-5 text-center"
    style="background-image: url('{{ asset('images/bgg6.png') }}'); background-size: cover; background-position: center;">
    <div class="container">

        <h2 class="fw-bold mb-5">Projects</h2>
        <hr class="mx-auto" style="border:2px solid #C16078; width:12%;">
        <div class="row align-items-center">

            <div class="col-md-4 d-flex flex-column gap-4">
                @foreach($projectsLeft as $project)
                <div class="card border-0 shadow-sm">
                    <div style="border: 2px solid #C16078">
                        <img src="{{ asset($project['image']) }}" class="card-img-top rounded" alt="{{ $project['name'] }}">
                        <div class="card-body text-center">
                            <a href="{{ $project['url'] }}" class="btn btn-outline-dark btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-md-4" style="display: flex;
  align-items: center;
  justify-content: center;">
                <ul class="list-unstyled" style="line-height: 2;">
                    @foreach($projectsCenter as $project)
                    <li class="d-flex align-items-center mb-3 text-center">
                        <span class="me-2 rounded-circle text-center"
                            style="display:inline-block; width:14px; height:14px; background-color:#C16078;"></span>
                        {{ $project }}
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4 d-flex flex-column gap-4">
                @foreach($projectsRight as $project)
                <div class="card border-0 shadow-sm">
                    <div style="border: 2px solid #C16078">
                        <img src="{{ asset($project['image']) }}" class="card-img-top rounded" alt="{{ $project['name'] }}">
                        <div class="card-body text-center">
                            <a href="{{ $project['url'] }}" class="btn btn-outline-dark btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>