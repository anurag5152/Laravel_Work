<section class="container my-5">
    <h2 class="display-5 fw-bold mb-5 text-center" style="color:#f47360">
        Experience
    </h2>

    <div class="row">
        <div class="col-md-7">
            @foreach($experiences as $exp)
                <div class="d-flex mb-4">
                    
                    <div class="p-4 d-flex align-items-center justify-content-center text-center"
                         style="background:#f47360; color:white; border-radius:10px 0 0 10px; min-width:220px;">
                        <p class="m-0 fw-bold" style="font-size:1.2rem;">
                            {{ $exp['role'] }}
                        </p>
                    </div>

                    <div class="flex-grow-1 p-4"
                         style="background:#2f343b; color:white; border-radius:0 10px 10px 0; position:relative;">
                        
                        <h5 style="color:#f47360; font-weight:600;">
                            {{ $exp['company'] }}
                        </h5>
                        <p class="mb-1">{{ $exp['description'] }}</p>
                        <small>{{ $exp['extra'] }}</small>

                        <div class="position-absolute top-0 end-0"
                             style="background:#f47360; color:white; writing-mode:vertical-rl; 
                                    text-orientation:mixed; padding:8px 4px; border-radius:0 0 6px 6px; font-size:0.85rem;">
                            {{ $exp['date'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-5 d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/edu4.png') }}" alt="Experience Illustration"
                 class="img-fluid" style="max-height:400px;">
        </div>
    </div>
</section>
