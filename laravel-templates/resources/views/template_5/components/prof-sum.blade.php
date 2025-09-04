<section class="container-fluid py-5" style="height:90%">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-7 text-white">
                <h2 class="fw-bold mb-4 text-center" style="font-size:4rem; ">
                    About <span class="highlight">me</span>
                </h2>
                <p style="line-height:1.8; font-size:1rem;">
                    {{ $paragraph }}
                </p>
            </div>

            <div class="col-md-5 text-center">
                <img src="{{ asset($image) }}" alt="About Me" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
