<section class="container my-5 position-relative overflow-hidden" x-data>
    <img src="{{ asset('images/web.png') }}" alt="Shape frame"
         style="position:absolute; top:10%; right:0; max-width:40%; height:auto; opacity:0.2; z-index:0; pointer-events:none;">

    <h2 class="display-5 fw-bold text-center mb-5">
        <span class="text-primary ">Skills</span>
        <hr class="border-2 mx-auto" style="border-color:#4169E1; width:220px;">
    </h2>

    <div class="row">
        {{-- Left Column --}}
        <div class="col-md-6 d-flex flex-column gap-4">
            @foreach(array_slice($skills, 0, ceil(count($skills)/2)) as $skill)
                <div class="d-flex align-items-center">
                    <div class="p-2 px-4 bg-secondary text-white rounded-pill me-2">
                        {{ $skill['name'] }}
                    </div>
                    <div class="flex-grow-1 border-top border-dashed position-relative">
                        <span class="position-absolute top-50 translate-middle-y end-0 
                                     rounded-circle border border-3 border-primary"
                              style="width:14px; height:14px; background:#111;"></span>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Right Column --}}
        <div class="col-md-6 d-flex flex-column gap-4">
            @foreach(array_slice($skills, ceil(count($skills)/2)) as $skill)
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 border-top border-dashed position-relative">
                        <span class="position-absolute top-50 translate-middle-y start-0 
                                     rounded-circle border border-3 border-primary"
                              style="width:14px; height:14px; background:#111;"></span>
                    </div>
                    <div class="p-2 px-4 bg-secondary text-white rounded-pill ms-2">
                        {{ $skill['name'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
