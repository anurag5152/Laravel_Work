<section class="container my-5">
    <h2 class="display-5 fw-bold text-white mb-4 text-center">Education</h2>

    <div class="row align-items-center">
        <div class="col-md-6">
            <ul class="list-unstyled">
                @foreach($education as $edu)
                    <li class="d-flex align-items-start mb-4">
                        <span class="me-3 mt-5" 
                              style="width:15px; height:15px; border:2px solid #fff; border-radius:50%; display:inline-block;">
                        </span>

                        <div class="border border-light p-3 rounded w-100">
                            <h5 class="fw-bold text-white mb-1" style="font-size: 2rem;">{{ $edu['university'] }}</h5>
                            <p class="text-white mb-1" style="font-size: 1.4rem;">{{ $edu['degree'] }}</p>
                            <small class="text-light" style="font-size: 1.2rem;">{{ $edu['duration'] }}</small>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-6 text-center">
            <img src="{{ asset('images/edu.png') }}" alt="Education Illustration" style="max-height:460px; max-width:100%;">
        </div>
    </div>
</section>
