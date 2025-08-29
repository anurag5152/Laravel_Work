<section class="container-fluid py-5 position-relative" style="background-color:black; color:white;">

  {{-- Left side overlapping background images --}}
  <img src="{{ asset('images/boxes.png') }}"
    class="position-absolute top-0 start-0"
    style="z-index: 0; opacity: 0.1; width: 120%; max-width: 250px;">

  <img src="{{ asset('images/boxes.png') }}"
    class="position-absolute top-0 start-0"
    style="z-index: 0; opacity: 0.08; width: 120%; max-width: 250px;">

  <div class="container position-relative" style="z-index: 1;">
    <div class="mb-4 text-center">
      <h2 class="fw-bold" style="color:#00ff66;">HOBBIES</h2>
      <hr class="border-2 mx-auto" style="border-color:#00ff66; width:180px;">
    </div>

    <div class="d-flex flex-wrap justify-content-center">
      @foreach($hobbies as $hobby)
        <span class="badge bg-success text-dark m-2 px-3 py-2 fs-6">
          {{ $hobby }}
        </span>
      @endforeach
    </div>
  </div>
</section>
