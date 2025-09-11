<section class="py-5" style="background-color: #1b263b;">
  <div class="container text-white" x-data="{ volunteer: @js($volunteer) }">

    <h2 class="fw-bold mb-5 text-center" style="font-family: 'Magra', sans-serif; color:#00e0ff;">
      VOLUNTEER
    </h2>

    <div class="row justify-content-center">
      <template x-for="(vol, index) in volunteer" :key="index">
        <div class="col-md-10 mb-4">
          <div class="card bg-dark text-white shadow-sm h-100">
            <div class="card-body">
              <h5 class="card-title fw-bold" x-text="vol.organization"></h5>
              <h6 class="card-subtitle mb-2 text-info" x-text="vol.role"></h6>
              <p class="card-text mb-1"><strong>Year:</strong> <span x-text="vol.year"></span></p>
              <p class="card-text" x-text="vol.description"></p>
            </div>
          </div>
        </div>
      </template>
    </div>

  </div>
</section>
