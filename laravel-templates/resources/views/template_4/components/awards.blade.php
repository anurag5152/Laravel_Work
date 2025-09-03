<section class="container my-5">
    <h2 class="display-5 fw-bold mb-4 text-center" style="color:#f47360;">
        Awards & Achievements
    </h2>

    <div class="row justify-content-center g-4">
        @foreach($awards as $award)
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-center p-4 h-100"
                     style="background:#2f343b; border-radius:15px; color:white; position:relative;">
                    
                    <div class="me-3 d-flex align-items-center justify-content-center"
                         style="width:30px; height:30px; background:#f47360; border-radius:50%;">
                    </div>

                    <div>
                        <h5 class="fw-bold mb-1" style="color:#f47360;">{{ $award['title'] }}</h5>
                        <p class="mb-1" style="font-size:0.95rem;">{{ $award['description'] }}</p>
                        <small class="text-white">{{ $award['year'] }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
