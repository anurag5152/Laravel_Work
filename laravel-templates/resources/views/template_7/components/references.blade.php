<div class="section-wrapper" style="background-color: #0f3d3e; " x-data="{ references: @js($references) }">
    <h2 class="text-center text-white fw-bold mb-5" style="font-family: 'Marko One', serif; font-size: 2.5rem;">
        References
    </h2>

    <div class="container">
        <div class="row g-4 justify-content-center">
            <template x-for="(ref, index) in references" :key="index">
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 shadow-sm border rounded-4 position-relative"
                         style="border: 2px solid #0f3d3e; background: #f8f9fa; transition: all 0.3s ease;">
                        
                        <div class="position-absolute top-0 start-50 translate-middle"
                             style="background: #43A047; color: #fff; width: 60px; height: 60px;
                                    border-radius: 50%; display: flex; align-items: center;
                                    justify-content: center; font-size: 1.5rem;">
                            <i class="bi bi-person-lines-fill" >
                                <img src="{{ asset('images/bg.png') }}" alt="" style="height: 30px; width:30px;">
                            </i>
                        </div>
                        
                        <div class="mt-5 text-center">
                            <h5 class="fw-bold mb-1" x-text="ref.name"></h5>
                            <p class="mb-1 text-muted" x-text="ref.position"></p>
                            <p class="mb-2 fw-semibold" x-text="ref.company"></p>
                            <p class="small mb-1">
                                <span x-text="ref.email"></span>
                            </p>
                            <p class="small mb-0">
                                <span x-text="ref.phone"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
