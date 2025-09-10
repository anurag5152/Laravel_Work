<section class="py-5" style="background-color: #50736ACC;">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-6">
                <h2 class="fw-bold mb-3 edu" style="font-family: 'Amaranth', sans-serif; text-transform:none;">
                    Education
                </h2>
                <hr class="mb-4 edu-border" style="border:3px solid #4462ff; width:24%;">
                @foreach($education as $edu)
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <div class="rounded-circle d-flex justify-content-center align-items-center" 
                                 style="width:40px; height:40px; background:linear-gradient(90deg, #2ec4f3, #3636f6);">
                                <i class="bi bi-journal-bookmark text-white">
                                    <img src="{{ asset('images/frame.png') }}" alt="" style="height: 20px; width:20px;">
                                </i>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold" style="font-family: 'Amaranth', sans-serif;">
                                {{ $edu['university'] }}
                            </h5>
                            <p class="mb-0">{{ $edu['degree'] }}</p>
                            <small class="text-primary fw-bold">{{ $edu['year'] }}</small>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-6 text-center">
                <img src="{{ asset('images/bg8.png') }}" alt="Education Illustration" class="img-fluid">
            </div>

        </div>
    </div>
</section>
