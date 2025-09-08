<div class="section-wrapper" x-data="{ projects: @js($projects) }">
    <h2 class="text-center fw-bold mb-5" style="font-family: 'Marko One', serif; font-size: 2.5rem;">
        Projects
    </h2>

    <div class="container">
        <div class="row g-4">
            <template x-for="(project, index) in projects" :key="index">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; background: #43A047;">
                        <img :src="project.image" class="card-img-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" alt="Project Image">

                        <div class="card-body text-white">
                            <h6 class="card-title" x-text="project.title"></h6>
                            <div class="d-flex gap-2 mt-2">
                                <a :href="project.github" target="_blank" class="btn btn-sm btn-outline-dark">Github</a>
                                <a :href="project.preview" target="_blank" class="btn btn-sm btn-dark">Preview</a>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
