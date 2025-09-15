<section class="education-section py-5">
    <div class="container position-relative">
        <h2 class="fw-bold text-center mb-5">Education</h2>
        <div class="row g-4">
            @foreach ($education as $item)
                <div class="col-md-6">
                    <div class="card shadow-lg border-0 h-100 p-4">
                        <div class="card-body text-dark">
                            <h5 class="fw-bold">{{ $item['degree'] }}</h5>
                            <h6 class="text-muted">{{ $item['university'] }} - {{ $item['years'] }}</h6>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="background-circles">
            <div class="circle circle1" style="width: 190px; height: 190px; top: 20%; left: -2%;"></div>
            <div class="circle circle2" style="width: 150px; height: 150px; top: 90%; left: 50%;"></div>
            <div class="circle circle3" style="width: 270px; height: 270px; top: 90%; left: 20%;"></div>
            <div class="circle circle4" style="width: 190px; height: 190px; top: 26%; left: 80%;"></div>
        </div>
    </div>
</section>
