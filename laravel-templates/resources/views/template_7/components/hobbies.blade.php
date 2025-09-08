<div class="section-wrapper" x-data="{ hobbies: @js($hobbies) }">
    <h2 class="text-center fw-bold mb-5" style="font-family: 'Marko One', serif; font-size: 2.5rem;">
        Hobbies
    </h2>

    <div class="container">
        <div class="row g-4 justify-content-center">
            <template x-for="(hobby, index) in hobbies" :key="index">
                <div class="col-6 col-md-4 col-lg-3 text-center"
                     style="border: 2px solid #0f3d3e; border-radius: 12px; padding: 20px; margin: 10px;">
                    <div class="shadow-sm d-flex align-items-center justify-content-center"
                         style="border-radius: 50%; background: #43A047; color: white;
                                font-size: 2rem; width: 60px; height: 60px; margin: 0 auto 15px;">
                        <span x-text="hobby.emoji"></span>
                    </div>
                    <h6 class="fw-bold mb-2" x-text="hobby.name"></h6>
                    <p class="text-muted small mb-0" x-text="hobby.description"></p>
                </div>
            </template>
        </div>
    </div>
</div>
