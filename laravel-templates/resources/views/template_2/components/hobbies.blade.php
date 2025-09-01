<section class="container-fluid py-5 position-relative">

  <div class="container position-relative" style="z-index: 1;">
    <div class="mb-4 text-center">
      <h2 class="fw-bold" style="color:#4169E1;">HOBBIES</h2>
      <hr class="border-2 mx-auto" style="border-color:#4169E1; width:170px;">
    </div>

    <div class="d-flex flex-wrap justify-content-center">
      @foreach($hobbies as $hobby)
        <span class="badge text-dark m-2 px-4 py-6 fs-5" style="background-color:#4169E1">
          {{ $hobby }}
        </span>
      @endforeach
    </div>
  </div>
</section>
