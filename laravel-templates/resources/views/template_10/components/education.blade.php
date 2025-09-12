<section class="education-section py-5" 
         style="background: url('{{ asset('images/bg10.png') }}') no-repeat center center/cover;">
    <div class="container text-center text-white">
        <h2 class="fw-bold mb-5">Education</h2>
        <div class="row">
            @foreach($educations as $edu)
                <div class="col-md-6 mb-4 edu-card">
                    <div class="d-flex align-items-start text-start">
                        <div class="me-3 mt-1">
                            <div class="rounded-circle border border-3 border-white" 
                                 style="width:25px; height:25px;"></div>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">{{ $edu['university'] }} | {{ $edu['years'] }}</h5>
                            <p class="mb-1">{{ $edu['degree'] }}</p>
                            <p class="fw-bold mb-0">{{ $edu['field'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
