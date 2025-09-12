<div class="container-fluid py-5">
    <div class="row align-items-center">
        <div class="col-md-7 prof-all px-5">
            <h2 class="fw-bold prof-title mb-4">About me</h2>
            <p class="text-justify">
                {{ $profileSummary }}
            </p>
        </div>
        <div class="col-md-5 prof-img d-none d-md-block"
             style="background: url('{{ asset('images/bg10.png') }}') no-repeat center center/cover; 
                    min-height: 350px;">
        </div>

    </div>
</div>
