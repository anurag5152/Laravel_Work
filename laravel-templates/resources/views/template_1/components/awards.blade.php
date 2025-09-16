<section class="container-fluid py-5" style="color:white;">
  <div class="position-absolute top-0 start-0 w-100 h-100"
    style="background: radial-gradient(circle at top left, rgba(0,255,102,0.08), transparent 70%); z-index:0;">
  </div>

  <div class="container position-relative" style="z-index:1;">
    <div class="mb-5 text-center">
      <h2 class="fw-bold" style="color:#00ff66;">AWARDS</h2>
      <hr class="border-2 mx-auto" style="border-color:#00ff66; width:180px;">
      <p class="text-white">Recognitions & achievements that shaped my journey</p>
    </div>

    <div class="row g-4">
      @foreach($awards as $award)
      <div class="col-md-6 col-lg-4">
        <div class="award-card p-4 h-100 d-flex flex-column justify-content-between"
          style="background: rgba(255,255,255,0.05); border: 1px solid rgba(0,255,102,0.3);
                    border-radius: 14px; backdrop-filter: blur(10px); transition: all 0.3s ease; cursor:pointer;">

          <div class="d-flex align-items-center mb-3">
            <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
              style="width:50px; height:50px; background:rgba(0,255,102,0.15); border:1px solid #00ff66;">
              🏆
            </div>
            <h5 class="fw-bold mb-0" style="color:#00ff66;">{{ $award['title'] }}</h5>
          </div>

          <p class="mb-1"><strong>{{ $award['organization'] }}</strong></p>
          <p class="mb-1">{{ $award['desc'] }}</p>
          <p class="text-white small">{{ $award['year'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

