<section class="py-5" style="background-color: #0d1b2a;">
  <div class="container text-white" x-data="{ publications: @js($publications) }">

    <h2 class="fw-bold mb-5 text-center" style="font-family: 'Magra', sans-serif; color:#00e0ff;">
      PUBLICATIONS
    </h2>

    <div class="row justify-content-center">
      <template x-for="(pub, index) in publications" :key="index">
        <div class="col-md-10 mb-4">
          <div class="card bg-dark text-white shadow-sm h-100">
            <div class="card-body">
              <h5 class="card-title fw-bold" x-text="pub.title"></h5>
              <h6 class="card-subtitle mb-2 text-info" x-text="pub.journal"></h6>
              <p class="card-text mb-1"><strong>Year:</strong> <span x-text="pub.year"></span></p>
              <p class="card-text" x-text="pub.description"></p>
              <a :href="pub.link" class="text-decoration-underline text-info" target="_blank">Read More</a>
            </div>
          </div>
        </div>
      </template>
    </div>

  </div>
</section>
