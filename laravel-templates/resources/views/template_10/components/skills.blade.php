<section class="skills-section py-5">
    <div class="container">
        <!-- Title -->
        <h2 class="fw-bold text-center mb-5">Skills</h2>

        <div class="row text-center g-4">
            @foreach($skills as $skill)
                <div class="col-6 col-md-3">
                    <div 
                        x-data="{
                            percent: {{ $skill['percentage'] }},
                            circumference: 2 * Math.PI * 45
                        }" 
                        class="d-flex flex-column align-items-center">

                        <!-- Progress Ring -->
                        <svg width="120" height="120" class="mb-2">
                            <!-- Background circle -->
                            <circle 
                                cx="60" cy="60" r="45"
                                stroke="#e6e6e6" 
                                stroke-width="10"
                                fill="none" />
                            
                            <!-- Foreground progress circle -->
                            <circle 
                                cx="60" cy="60" r="45"
                                stroke="#315391" 
                                stroke-width="10"
                                fill="none"
                                stroke-dasharray="282.74"
                                :stroke-dasharray="circumference"
                                :stroke-dashoffset="circumference - (percent / 100) * circumference"
                                stroke-linecap="round"
                                transform="rotate(-90 60 60)" />
                        </svg>

                        <!-- Percentage in center -->
                        <div class="position-absolute mt-5">
                            <span class="fw-bold h5" x-text="percent + '%'"></span>
                        </div>

                        <!-- Skill name -->
                        <p class="fw-semibold mt-2">{{ $skill['name'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
