<section class="container-fluid py-5 position-relative" style="background-color:black; color:white;">

  {{-- Right side overlapping images --}}
  <img src="{{ asset('images/boxes.png') }}"
    class="position-absolute top-0 end-50"
    style="z-index: 0; opacity: 0.1; width: 120%; max-width: 320px;">

  <img src="{{ asset('images/boxes.png') }}"
    class="position-absolute top-0 end-50"
    style="z-index: 0; opacity: 0.08; width: 120%; max-width: 320px;">

  <div class="container" style="z-index: 1; position: relative;">
    <div class="mb-4 text-center">
      <h2 class="fw-bold" style="color:#00ff66;">WORK EXPERIENCE</h2>
      <hr class="border-2 mx-auto" style="border-color:#00ff66; width:320px;">
    </div>

    <div class="row">
      @foreach($experiences as $exp)
      <div class="col-md-6 mb-4 p-4">
        <div class="d-flex flex-column h-100">
          <div class="mb-2">
            <h5 class="fw-bold mb-1">
              <a href="#" class="text-decoration-none text-white">{{ $exp['role'] }}</a>
            </h5>
            <small class="text-white">{{ $exp['duration'] }}</small>
            <hr class="border-2 " style="border-color:#00ff66; width:130px;">
          </div>

          <div>
            <h6 class="fw-bold">{{ $exp['company'] }}</h6>
            <p class="mb-1">{{ $exp['description'] }}</p>
            <p class="mb-0">
              <i class="bi bi-geo-alt-fill text-success"></i> {{ $exp['location'] }}
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
