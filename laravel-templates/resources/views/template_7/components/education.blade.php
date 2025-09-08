<div class="container py-5">
    <h2 class="fw-bold text-center mb-5" 
        style="color:#064420; font-family:'Marko One', serif;">
        Education
    </h2>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <ul class="list-unstyled position-relative">
                @foreach($education as $edu)
                    <li class="d-flex mb-4 position-relative">
                        <div class="d-flex flex-column align-items-center me-3 position-relative">
                            <div class="rounded-circle border border-3 border-success bg-white" 
                                 style="width:20px; height:20px; z-index:1;"></div>
                            @if(!$loop->last)
                                <div class="position-absolute start-50 translate-middle-x border-start border-3 border-success" 
                                     style="top: 10px; bottom: -26px;"></div>
                            @endif
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">
                                {{ $edu['institution'] }} | {{ $edu['year'] }}
                            </h5>
                            <p class="text-success mb-1 fw-semibold">
                                {{ $edu['degree'] }}
                            </p>
                            <p class="fw-bold">
                                {{ $edu['field'] }}
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>