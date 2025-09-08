<div class="section-wrapper" style="background-color: #0f3d3e; color:white;" x-data="{ experiences: @js($experience) }">
    <h2 class="text-center fw-bold mb-5" style="font-family: 'Marko One', serif; font-size: 2.5rem;">
        Work Experience
    </h2>

    <div class="container">
        <template x-for="(exp, index) in experiences" :key="index">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h4 class="fw-bold" style="color: #58A75A;" x-text="exp.position"></h4>
                    <p class="fw-semibold" x-text="exp.duration"></p>
                </div>
                <div class="col-md-6">
                    <h4 class="fw-bold" style="color: #58A75A;" x-text="exp.company"></h4>
                    <p x-text="exp.description"></p>
                    <p class="mb-0">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span class="fw-bold" x-text="exp.location"></span>
                    </p>
                </div>
            </div>
        </template>
    </div>
</div>
