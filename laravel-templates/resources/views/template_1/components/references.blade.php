<section class="container-fluid py-5" style="background-color:black; color:white;">
  <div class="container">
    <div class="mb-5 text-center">
      <h2 class="fw-bold" style="color:#00ff66;">REFERENCES</h2>
      <hr class="border-2 mx-auto" style="border-color:#00ff66; width:220px;">
      <p class="text-white">Trusted professionals who can vouch for my work</p>
    </div>

    <div class="row g-4">
      @foreach($references as $ref)
      <div class="col-md-6">
        <div class="reference-card p-4 h-100 d-flex align-items-start"
             style="background:linear-gradient(135deg,#1f2937,#111827);
                    border:1px solid rgba(0,255,102,0.3);
                    border-radius:14px;
                    transition: all 0.3s ease;">

          <div class="rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
               style="width:60px; height:60px; background:rgba(0,255,102,0.1); border:1px solid #00ff66; font-size:24px; font-weight:bold; color:#00ff66;">
            {{ strtoupper(substr($ref['name'],0,1)) }}
          </div>

          <div>
            <h5 class="fw-bold mb-1" style="color:#00ff66;">{{ $ref['name'] }}</h5>
            <p class="mb-1 text-white">{{ $ref['position'] }} - {{ $ref['company'] }}</p>
            <p class="mb-1"><i class="bi bi-envelope-fill text-success me-2"></i>{{ $ref['email'] }}</p>
            <p class="mb-0"><i class="bi bi-telephone-fill text-success me-2"></i>{{ $ref['phone'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
