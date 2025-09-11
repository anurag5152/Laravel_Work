<section class="py-5" style="background-color: #0d1b2a;">
  <div class="container text-white" x-data="{ hobbies: @js($hobbies) }">

    <h2 class="fw-bold mb-5 text-center" style="font-family: 'Magra', sans-serif; color:#00e0ff;">
      HOBBIES
    </h2>

    <div class="row g-4">
      <template x-for="(hobby, index) in hobbies" :key="index">
        <div class="col-sm-6 col-lg-4">
          <div class="card bg-dark text-white shadow-sm h-100 text-center p-3">
            <div class="card-body">
              <div class="mb-3">
                <i :class="hobby.icon" class="fs-1 text-info"></i>
              </div>
              <h5 class="fw-bold" x-text="hobby.name"></h5>
              <p class="mb-0" x-text="hobby.description"></p>
            </div>
          </div>
        </div>
      </template>
    </div>

  </div>
</section>
