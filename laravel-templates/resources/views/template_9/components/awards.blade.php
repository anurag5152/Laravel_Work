<section class="py-5" style="background-color: #1b263b;">
  <div class="container text-white" x-data="{ awards: @js($awards) }">

    <h2 class="fw-bold mb-5 text-center" style="font-family: 'Magra', sans-serif; color:#00e0ff;">
      AWARDS
    </h2>

    <div class="row">
      <div class="col-md-7">
        <template x-for="(award, index) in awards" :key="index">
          <div class="d-flex position-relative mb-4">
            <div class="d-flex flex-column align-items-center me-3 position-relative">
              <div class="bg-dark border border-3 border-info rounded-circle position-relative z-1" 
                   style="width:20px; height:20px;"></div>
              <div 
                x-show="index !== awards.length - 1" 
                class="position-absolute border-start border-2 border-info"
                style="top: 20px; left: 50%; transform: translateX(-50%); height: calc(100% + 16px);">
              </div>
            </div>

            <div class="flex-grow-1">
              <h5 class="mb-1 fw-bold">
                <span x-text="award.title"></span>
                <span class="text-muted">|</span>
                <span x-text="award.year"></span>
              </h5>
              <p class="mb-0" x-text="award.description"></p>
            </div>
          </div>
        </template>
      </div>

  </div>
</section>
