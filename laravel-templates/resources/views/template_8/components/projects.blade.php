<section class="py-5" style="background-color: #50736ACC;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <h2 class="fw-bold mb-3 text-center" style="font-family: 'Amaranth', sans-serif; text-transform:none;">
                    Projects
                </h2>
                <hr class="mb-4" style="border:3px solid #4462ff; width:30%; margin-left:34%">
                
                <h3 class="fw-bold" style="font-family: 'Amaranth', sans-serif;">
                    My Creative Works <br>
                    Latest <span class="text-primary">Projects</span>
                </h3>
                
                <p class="mt-3">
                    I excel at identifying emerging market opportunities and translating
                    complex challenges into actionable strategies that drive sustainable
                    growth and competitive advantage.
                </p>
                
                <button class="btn btn-primary mt-3 px-4 py-2">
                    Show More
                </button>
            </div>
            <div class="col-md-7">
                <div class="row g-4" x-data="{ projects: {{ Js::from($projects) }} }">
                    <template x-for="project in projects" :key="project.id">
                        <div class="col-md-6" >
                            <div class="card h-100 shadow-sm border-0" style="border-radius: 12px; overflow: hidden; background:#1a1a1a;">
                                <img :src="project.image" class="card-img-top" alt="Project Image">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold" style="color: white;" x-text="project.title"></h5>
                                    <p class="card-text" style="color: white;" x-text="project.description"></p>
                                    <a :href="project.github" target="_blank" class="btn btn-outline-primary btn-sm pro-button">
                                        View on GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

        </div>
    </div>
</section>
