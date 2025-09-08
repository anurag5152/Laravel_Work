<div class="skills-section py-5 text-center" style="background-color: #0f3d3e; color:white;">
    <div class="container">
        <h2 class="fw-bold mb-5" style="font-family: 'Marko One', serif;">Skills</h2>

        <div class="row justify-content-center g-4">
            @foreach($skills as $skill)
                <div class="col-6 col-md-4 col-lg-2 text-center">
                    <svg class="progress-ring" width="120" height="120">
                        @php
                            $radius = 50;
                            $circumference = 2 * M_PI * $radius;
                            $offset = $circumference - ($skill['percent'] / 100) * $circumference;
                        @endphp
                        <circle
                            class="progress-ring__background"
                            stroke="#ddd"
                            stroke-width="10"
                            fill="transparent"
                            r="{{ $radius }}"
                            cx="60"
                            cy="60"
                        />
                        <circle
                            class="progress-ring__circle"
                            stroke="#2ecc71"
                            stroke-width="10"
                            fill="transparent"
                            r="{{ $radius }}"
                            cx="60"
                            cy="60"
                            stroke-dasharray="{{ $circumference }}"
                            stroke-dashoffset="{{ $offset }}"
                            stroke-linecap="round"
                        />
                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="18" font-weight="bold">
                            {{ $skill['percent'] }}%
                        </text>
                    </svg>
                    <h5 class="mt-2">{{ $skill['name'] }}</h5>
                </div>
            @endforeach
        </div>
    </div>
</div>
