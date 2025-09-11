<section class="py-5" style="background-color: #1b263b;">
  <div class="container text-white" 
       x-data="{ experiences: @js($experiences) }">
    <h5 class="fw-bold" style="color:#00e0ff;">My Experience</h5>
    <h2 class="fw-bold mb-5" style="font-family: 'Magra', sans-serif;">
      EXPERIENCE 
    </h2>
    <div class="row g-4">
      <template x-for="(exp, index) in experiences" :key="index">
        <div class="col-lg-4 col-md-6">
          <div class="p-4 h-100 border border-info rounded-3" style="background-color: #1E252F;">
            <h6 class="text-info mb-2" x-text="exp.year + '  ' + exp.position"></h6>
            <h4 class="fw-bold" x-text="exp.company"></h4>
            <p class="mt-2" x-text="exp.description"></p>
          </div>
        </div>
      </template>
    </div>
  </div>
</section>
