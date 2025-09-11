<section class="py-5" style="background-color: #1b263b;">
  <div class="container text-white" x-data="{ skills: @js($skills) }">

    <h5 class="fw-bold" style="color:#00e0ff;">My Skills</h5>
    <h2 class="fw-bold mb-5" style="font-family: 'Magra', sans-serif;">
      SKILLS OVERVIEW
    </h2>

    <div class="row g-4">
      <template x-for="(skill, index) in skills" :key="index">
        <div class="col-md-6">
          <div class="d-flex justify-content-between">
            <span class="fw-bold" x-text="skill.name"></span>
            <span style="color:#00e0ff;" x-text="skill.percentage + '%'"></span>
          </div>
          <div class="progress mt-2" style="height: 6px; background-color: #e0e0e0;">
            <div class="progress-bar" 
                 role="progressbar" 
                 :style="`width: ${skill.percentage}%; background-color:#00e0ff;`" 
                 :aria-valuenow="skill.percentage" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
      </template>
    </div>
  </div>
</section>
