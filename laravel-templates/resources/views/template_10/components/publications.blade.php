<section class="publications-section py-5" 
         style="background: url('{{ asset('images/bg10.png') }}') no-repeat center center/cover;">
    <div class="container text-center text-white">
        <h2 class="fw-bold pub-title mb-5">Publications</h2>
        <div class="row">
            @foreach($publications as $pub)
                <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-start text-start pub-card">
                        <div class="me-3 mt-1">
                            <div class="rounded-circle border border-3 border-white" 
                                 style="width:25px; height:25px;"></div>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">{{ $pub['title'] }}</h5>
                            <p class="mb-1">{{ $pub['journal'] }}</p>
                            <p class="fw-bold mb-0">{{ $pub['year'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
