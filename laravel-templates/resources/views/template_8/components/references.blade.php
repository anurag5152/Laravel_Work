<section class="py-5" style="background-color:#1a1a1a; color:white;">
    <div class="container">
        <h2 class="fw-bold mb-3 text-center" style="font-family: 'Amaranth', sans-serif; text-transform:none;">
            References
        </h2>
        <hr class="mb-5 mx-auto" style="border:3px solid #4462ff; width:10%;">
        <div class="row g-4" x-data="{ references: {{ Js::from($references) }} }">
            <template x-for="ref in references" :key="ref.id">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100 p-4 text-white"
                         style="background:#2a2a2a; border-radius:16px; color:white !important;">
                        
                        <h5 class="fw-bold mb-1" style="font-family:'Amaranth', sans-serif;" x-text="ref.name"></h5>
                        
                        <p class="mb-1 text-primary fw-semibold" x-text="ref.position"></p>
                        
                        <p class="mb-2" x-text="ref.organization"></p>
                        
                        <small class="d-block">
                            <i class="bi bi-envelope me-2"></i> <span x-text="ref.email"></span>
                        </small>
                        <small class="d-block">
                            <i class="bi bi-telephone me-2"></i> <span x-text="ref.phone"></span>
                        </small>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>
