<section class="py-5" style="background-color: #1b263b;">
  <div class="container text-white" x-data="{ projects: @js($projects) }">

    <h2 class="fw-bold mb-5 text-center" style="font-family: 'Magra', sans-serif;">
      PROJECTS
    </h2>

    <template x-for="(project, index) in projects" :key="index">
      <div class="row align-items-center mb-4">

        <div class="col-md-4 d-flex justify-content-end">
          <span class="fw-semibold me-3" style="color:#00e0ff;" x-text="project.name"></span>
        </div>

        <div class="col-md-1 d-none d-md-block">
          <div style="border-bottom: 2px dashed #00e0ff; width:100%;"></div>
        </div>

        <div class="col-md-7">
          <div class="card bg-dark text-white border-0 shadow-sm" style="height: 180px;">
            <div class="row g-0 h-100">
              
              <div class="col-4">
                <img :src="project.image" class="img-fluid h-100 rounded-start" style="object-fit: cover;">
              </div>

              <div class="col-8">
                <div class="card-body d-flex flex-column justify-content-between">
                  <p class="card-text small lh-sm" x-text="project.description"></p>
                  <a :href="project.github_link" target="_blank"
                     class="fw-bold small mt-2" style="color:#00e0ff; text-decoration: underline;">
                     GitHub
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </template>
  </div>
</section>