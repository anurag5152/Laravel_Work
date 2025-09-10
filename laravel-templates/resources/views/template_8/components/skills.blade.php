<section class="py-5 bg-#1a1a1a text-white">
    <div class="container">
        <h2 class="fw-bold mb-3 text-center" style="font-family: 'Amaranth', sans-serif; text-transform: none;">
            Skills
        </h2>
        <hr class="mx-auto" style="border:3px solid #4462ff; width:10vw;">
        <div class="row align-items-center">

            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="fw-bold" style="font-family:'Amaranth', sans-serif;">
                    Why Hire Me For Your Next <span class="text-primary">Project?</span>
                </h2>
                <p class="mt-3" style="font-family:'Amaranth', sans-serif; line-height:1.6;">
                    I excel at identifying emerging market opportunities and translating
                    complex challenges into actionable strategies that drive sustainable
                    growth and competitive advantage.
                </p>
                <div class="text-center mt-3">
                    <a href="#contact" class="btn btn-primary">
                        Hire Me
                    </a>
                </div>
            </div>

            <div class="col-md-6 d-flex flex-wrap justify-content-center">
                @foreach($skills as $skill)
                <div class="text-center m-3"
                    x-data="{ percent: {{ $skill['percentage'] }} }">
                    <svg width="120" height="120" viewBox="0 0 120 120">
                        <circle cx="60" cy="60" r="54" stroke="#333" stroke-width="12" fill="none" />
                        <circle cx="60" cy="60" r="54"
                            stroke="url(#grad)"
                            stroke-width="12"
                            fill="none"
                            stroke-dasharray="339.292"
                            :stroke-dashoffset="339.292 - (339.292 * percent / 100)"
                            stroke-linecap="round" />
                        <text x="50%" y="50%" text-anchor="middle" dy=".3em" fill="white"
                            font-size="20" font-weight="bold" x-text="percent + '%'"></text>
                        <defs>
                            <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#0dcaf0" />
                                <stop offset="100%" stop-color="#0d6efd" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <p class="mt-2 fw-bold" style="font-family:'Amaranth', sans-serif;">
                        {{ $skill['name'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>