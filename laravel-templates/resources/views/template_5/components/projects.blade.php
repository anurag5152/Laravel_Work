<section class="container-fluid py-5"
  x-data="{
            search: '',
            projects: {{ json_encode($projects) }},
            selected: null,
            get filteredProjects() {
                if (this.search.trim() === '') return this.projects;
                return this.projects.filter(p => 
                    p.title.toLowerCase().includes(this.search.toLowerCase())
                );
            }
         }">

  <div class="mb-5 text-center">
    <h2 class="fw-bold" style="font-size:2.5rem; font-family: 'Magra', sans-serif;">
      Projects
    </h2>
    <hr class="mx-auto" style="border:2px solid highlight; width:150px;">
  </div>

  <div class="text-center mb-5">
    <input type="text" class="form-control mx-auto"
      style="max-width:400px; border:2px solid highlight; background:transparent; color:white;"
      placeholder="Search projects..."
      x-model="search">
  </div>

  <div class="row g-4 justify-content-center">
    <template x-for="project in filteredProjects" :key="project.id">
      <div class="col-md-3">
        <div class="card h-100 shadow border-0" style="background-color:#2f3834;">
          <img :src="project.image" class="card-img-top" :alt="project.title">
          <div class="card-body text-center">
            <h5 class="card-title fw-bold text-white" x-text="project.title" style="font-family:'Magra', sans-serif;"></h5>

            <button class="btn btn-sm fw-bold mt-2"
              style="background:none; color:highlight; border:none;"
              @click="selected = project"
              data-bs-toggle="modal" data-bs-target="#projectModal">
              View details <i class="bi bi-info-circle-fill"></i>
            </button>
          </div>
        </div>
      </div>
    </template>
  </div>

  <div class="modal fade" id="projectModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content" style="background-color:#2f3834; color:white;">
        <div class="modal-header border-0">
          <h5 class="modal-title fw-bold" style="font-family:'Magra', sans-serif;" x-text="selected?.title"></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <img :src="selected?.image" class="img-fluid rounded mb-3" :alt="selected?.title">
          <p x-text="selected?.description"></p>
        </div>
        <div class="modal-footer border-0">
          <a :href="selected?.link" target="_blank" class="btn btn-primary">
            Visit Project <i class="bi bi-box-arrow-up-right"></i>
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</section>