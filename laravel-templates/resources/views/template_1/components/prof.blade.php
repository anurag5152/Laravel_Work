<section class="container-fluid py-5 mt-5" x-data="{ show: true }">

<img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-30 start-20 translate-middle-x"
        style="z-index: 0; opacity: 0.1; width: 100%; max-width: 200px;">

    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-45 start-80 translate-middle-x"
        style="z-index: 0; opacity: 0.1; width: 100%; max-width: 200px;">
    <div class="container">
  <div class="container">
    <div class="mb-4 text-start">
      <h2 class="fw-bold">
        <span style="color:#00ff66;">PROFESSIONAL</span> SUMMARY
      </h2>
      <hr class="border-2" style="border-color:#00ff66; width:450px;">
    </div>

    <div class="row align-items-center">
      <div class="col-md-7" x-show="show" x-transition>
        <p class="mb-4">
          {{ $summary }}
        </p>

        <div class="d-flex gap-3">
          <a href="{{ $twitter ?? '#' }}" class="text-decoration-none" style="color:#00ff66;">
            <i class="bi bi-twitter fs-4"></i>
          </a>
          <a href="{{ $linkedin ?? '#' }}" class="text-decoration-none" style="color:#00ff66;">
            <i class="bi bi-linkedin fs-4"></i>
          </a>
          <a href="{{ $github ?? '#' }}" class="text-decoration-none" style="color:#00ff66;">
            <i class="bi bi-github fs-4"></i>
          </a>
        </div>
      </div>

      <div class="col-md-5 text-center">
        <img src="/images/prof-sum.png" alt="Shape Image" class="img-fluid">
      </div>
    </div>
  </div>
</section>
