<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 position-relative mb-4 mb-md-0">
                <div class="about-res">
                    <div class="bg-rect"></div>
                    <img src="/images/pattern12.png" alt="Pattern" class="pattern-img">
                    <img src="{{ $about['image'] }}" alt="Profile" class="img-fluid main-img">
                </div>
            </div>
            <div class="col-md-7">
                <h2 class="fw-bold mb-3 text-center text-md-start">About Me</h2>
                <p class="mb-4">{{ $about['description'] }}</p>
                @foreach ($about['skills'] as $skill)
                <div class="mb-3">
                    <label class="fw-bold">{{ $skill['name'] }}</label>
                    <div class="progress" style="height: 18px; background-color: #cbb9a9;">
                        <div class="progress-bar"
                            role="progressbar"
                            style="width: {{ $skill['value'] }}%; background-color:#966E4D;">
                            {{ $skill['value'] }}%
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>