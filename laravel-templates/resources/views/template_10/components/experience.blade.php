<section class="experience-section py-5"
    style="background: url('{{ asset('images/bg10.png') }}') no-repeat center center/cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold exp-title text-white mb-5">Experience</h2>

                @foreach($experiences as $exp)
                <div class="d-flex mb-4 shadow-sm exp-card rounded overflow-hidden position-relative bg-white">
                    <div class="p-3 bg-light text-center" style="min-width: 180px;">
                        <h5 class="mb-1">{{ $exp['role'] }}</h5>
                        <p class="mb-0">{{ $exp['company'] }}</p>
                    </div>
                    <div class="flex-grow-1 p-3">
                        <p class="mb-0">{{ $exp['description'] }}</p>
                    </div>
                    <div class="bg-secondary text-white small fw-bold d-flex align-items-center justify-content-center px-1"
                        style="writing-mode: vertical-rl; text-orientation: mixed; border-top-left-radius:.25rem; border-bottom-left-radius:.25rem;">
                        {{ $exp['duration'] }}
                    </div>
                </div>
                @endforeach

            </div>

            <div class="col-md-6 text-center">
                {{-- Insert your own illustration/image here --}}
                <img src="{{ asset('images/exp10.png') }}"
                    alt="Experience Illustration"
                    class="img-fluid">
            </div>

        </div>
    </div>
</section>