<section class="py-5" style="background-color: #1b263b;">
  <div class="container text-white" x-data="{ education: @js($education) }">

    <h2 class="fw-bold mb-5 text-center" style="font-family: 'Magra', sans-serif; color:#00e0ff;">
      EDUCATION
    </h2>

    <div class="row">
      <div class="col-md-7">
        <template x-for="(edu, index) in education" :key="index">
          <div class="d-flex position-relative mb-4">
            <div class="d-flex flex-column align-items-center me-3 position-relative">
              <div class="bg-dark border border-3 border-info rounded-circle position-relative z-1" style="width:20px; height:20px;"></div>

              <div 
                x-show="index !== education.length - 1" 
                class="position-absolute border-start border-2 border-info"
                style="top: 20px; left: 50%; transform: translateX(-50%); height: calc(100% + 16px);">
              </div>
            </div>
            <div class="flex-grow-1">
              <h5 class="mb-1 fw-bold">
                <span x-text="edu.university"></span>
                <span class="text-muted">|</span>
                <span x-text="edu.year"></span>
              </h5>
              <p class="mb-1 text-info fw-semibold" x-text="edu.degree"></p>
              <p class="mb-0" x-text="edu.field"></p>
            </div>
          </div>
        </template>
      </div>

      <div class="col-md-5 edu-image text-center">
        <img src="{{asset('images/edu9.png')}}" alt="Education" class="img-fluid" style="max-height:320px;">
      </div>
    </div>
  </div>