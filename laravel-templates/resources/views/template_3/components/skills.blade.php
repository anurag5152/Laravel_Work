<section class="container my-5 text-center">
    <h2 class="display-5 fw-bold text-white mb-4">SKILLS</h2>

    <div class="row justify-content-center g-4">
        @foreach($skills as $skill)
            <div class="col-6 col-md-2 d-flex flex-column align-items-center"
                 x-data="{ percent: 0 }"
                 x-init="setTimeout(() => { percent = {{ $skill['percent'] }} }, 300)">
                 
                <div class="position-relative mb-2">
                    <svg width="100" height="100" viewBox="0 0 36 36" class="circular-chart">
                        <path class="circle-bg"
                              d="M18 2.0845
                                 a 15.9155 15.9155 0 0 1 0 31.831
                                 a 15.9155 15.9155 0 0 1 0 -31.831"
                              fill="none"
                              stroke="#3a4a5a"
                              stroke-width="3"/>
                              
                        <path class="circle"
                              stroke="#5da3f5"
                              stroke-width="3"
                              fill="none"
                              stroke-dasharray="100,100"
                              :stroke-dasharray="percent + ', 100'"
                              d="M18 2.0845
                                 a 15.9155 15.9155 0 0 1 0 31.831
                                 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                    </svg>

                    <div style="font-size: 1.8rem;" class="position-absolute top-50 start-50 translate-middle fw-bold text-white">
                        <span x-text="percent + '%'"></span>
                    </div>
                </div>

                <p class="text-white fw-bold" style="font-size: 1.5rem;">{{ $skill['name'] }}</p>
            </div>
        @endforeach
    </div>
</section>
