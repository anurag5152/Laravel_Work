<section class="container-fluid py-5" style="background-color:#f47360; height:90%">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-7 text-white">
                <h2 class="fw-bold mb-4" style="font-size:2.5rem; font-family: 'Eagle Lake', serif;">
                    About me
                </h2>
                <p style="line-height:1.8; font-size:1rem; font-family: 'Abhaya Libre', serif;">
                    {{ $paragraph }}
                </p>
            </div>

            <div class="col-md-5 text-center">
                <img src="{{ asset($image) }}" alt="About Me" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
