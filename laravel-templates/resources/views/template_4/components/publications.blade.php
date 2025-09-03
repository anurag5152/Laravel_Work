<section class="container my-5">
    <h2 class="display-5 fw-bold mb-4 text-center" style="color:#f47360;">
        Publications
    </h2>

    <div class="row justify-content-center g-4">
        @foreach($publications as $publication)
            <div class="col-12 col-md-6">
                <div class="p-4 h-100 d-flex flex-column"
                     style="background:#2f343b; border-radius:15px; color:white; position:relative;">
                    
                    <div class="position-absolute top-0 start-0"
                         style="background:#f47360; color:white; writing-mode:vertical-rl;
                                text-orientation:mixed; padding:6px 4px; 
                                border-radius:0 0 6px 6px; font-size:1rem;">
                        {{ $publication['year'] }}
                    </div>

                    <h5 class="fw-bold text-center" style="color:#f47360;">{{ $publication['title'] }}</h5>
                    <p class="mb-1 text-center" style="font-size:0.95rem;">{{ $publication['description'] }}</p>
                    <small class="text-white text-center">Published in: {{ $publication['publisher'] }}</small>
                </div>
            </div>
        @endforeach
    </div>
</section>
