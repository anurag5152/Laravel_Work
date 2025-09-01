<section class="container-fluid py-5" >
  <div class="container">
    <div class="mb-4 text-center">
      <h2 class="fw-bold" style="color:#4169E1;">AWARDS</h2>
      <hr class="border-2 mx-auto" style="border-color:#4169E1; width:180px;">
    </div>

    <div class="row">
      @foreach($awards as $award)
        <div class="col-md-6 mb-4" style="color: white;">
          <div class="p-3 border rounded shadow-sm h-100 bg-dark" style="border-color:#4169E1 !important; background-color:#1f2937;">
            <h5 class="fw-bold">{{ $award['title'] }}</h5>
            <p class="mb-1"><strong>{{ $award['organization'] }}</strong></p>
            <p class="text-white">{{ $award['year'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
