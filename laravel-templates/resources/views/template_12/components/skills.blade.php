<section class="container-fluid py-5" x-data="{ show: true }">
    <div class="container">
        <div class="mb-5 text-start">
            <h2 class="fw-bold">
                <span style="color:black;">SKILLS</span>
            </h2>
            <p style="color:black; font-size:1.5rem;">Technologies and tools I excel at</p>
        </div>

        <div class="row g-4">
            @foreach($skills as $skill)
            <div class="col-md-6" x-show="show" x-transition>
                <div class="skill-card p-4 h-100" 
                     style="background: rgba(255,255,255,0.03); border:1px solid rgba(169,135,109,0.4); border-radius:12px; transition: all 0.3s ease;">
                    
                    <h5 class="fw-bold mb-3" style="color:#A9876D;">{{ $skill['category'] }}</h5>

                    <div class="skill-bars">
                        @foreach($skill['skills_list'] as $item)
                        <div class="mb-3">
                            <span class="d-flex justify-content-between" style="color:#70635C;">
                                <span>{{ $item['name'] }}</span>
                                <span>{{ $item['level'] }}%</span>
                            </span>
                            <div class="progress" style="height:6px; border-radius:5px; background-color:rgba(112,99,92,0.2);">
                                <div class="progress-bar" role="progressbar" 
                                     style="width: {{ $item['level'] }}%; background: linear-gradient(90deg,#A9876D,#70635C);"
                                     aria-valuenow="{{ $item['level'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
