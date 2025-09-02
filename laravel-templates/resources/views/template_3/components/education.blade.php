<section class="container my-5">
    <h2 class="display-5 fw-bold text-white mb-4 text-center">Education</h2>

    <div class="row align-items-center">
        <!-- Left Side: Education List -->
        <div class="col-md-6">
            <ul class="list-unstyled">
                @foreach($education as $edu)
                    <li class="d-flex align-items-start mb-4">
                        <!-- Circle Bullet -->
                        <span class="me-3 mt-5" 
                              style="width:15px; height:15px; border:2px solid #fff; border-radius:50%; display:inline-block;">
                        </span>

                        <!-- Education Details -->
                        <div class="border border-light p-3 rounded w-100">
                            <h5 class="fw-bold text-white mb-1" style="font-size: 2rem;">{{ $edu['university'] }}</h5>
                            <p class="text-white mb-1">{{ $edu['degree'] }}</p>
                            <small class="text-light">{{ $edu['duration'] }}</small>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Right Side: Illustration -->
        <div class="col-md-6 text-center">
            {{-- You can insert your education image here --}}
            <img src="{{ asset('images/edu.png') }}" alt="Education Illustration" style="max-height:400px; max-width:100%;">
        </div>
    </div>
</section>
