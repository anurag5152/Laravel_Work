<section class="volunteer-section py-5" >
    <div class="container text-center ">
        <h2 class="fw-bold vol-title mb-5">Volunteer</h2>
        <div class="row">
            @foreach($volunteers as $vol)
                <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-start text-start vol-card">
                        <div class="me-3 mt-1">
                            <div class="rounded-circle border border-3 border-black" 
                                 style="width:25px; height:25px;"></div>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">{{ $vol['organization'] }} | {{ $vol['years'] }}</h5>
                            <p class="mb-1">{{ $vol['role'] }}</p>
                            <p class="fw-bold mb-0">{{ $vol['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
