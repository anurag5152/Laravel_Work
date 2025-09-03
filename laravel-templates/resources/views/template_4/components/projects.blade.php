<section class="container my-5">
    <h2 class="display-5 fw-bold mb-4 text-center" style="color:#f47360">
        Featured Projects
    </h2>

    <div class="row justify-content-center g-4">
        @foreach($projects as $project)
        <div class="col-12 col-md-4 d-flex">
            <div class="w-100 d-flex flex-column"
                style="background:#f47360; border-radius:15px; overflow:hidden; position:relative;">

                <div class="p-3 text-center" style="background:#f47360;">
                    <img src="{{ asset($project['image']) }}"
                        alt="{{ $project['title'] }}"
                        class="img-fluid rounded"
                        style="max-height:180px; object-fit:cover;">
                </div>

                <div style="height:6px; background:white;"></div>

                <div class="p-3" style="background:#2f343b; color:white; position:relative;">
                    <div class="position-absolute top-0 start-0"
                        style="background:#f47360; color:white; writing-mode:vertical-rl;
                                    text-orientation:mixed; padding:6px 4px; 
                                    border-radius:0 0 6px 6px; font-size:0.8rem;">
                        {{ $project['year'] }}
                    </div>

                    <h5 class="fw-bold mb-2 text-center" style="color:#f47360; border-bottom:2px solid white">
                        {{ $project['title'] }}
                    </h5>
                    <h5 class="mb-2 text-center" style="color:white;">
                        Tech stack: {{ $project['tech_stack'] }}
                    </h5>
                    <a href="{{ $project['link'] }}" target="_blank" class="btn" style="color: #4169E1; margin-left:34%; ">Visit Project</a>

                    <p class="mb-0" style="font-size:0.95rem;">
                        {{ $project['description'] }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>