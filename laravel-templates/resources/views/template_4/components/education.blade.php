<section class="container-fluid py-5" style="background-color:#2b2f36;">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center" 
            style="color:#f47360; font-family:'Eagle Lake', serif; font-size:2.5rem;">
            Education
        </h2>

        @foreach($education as $edu)
            <div class="mb-4">
                <div class="d-flex align-items-center">
                    <span style="
                        width:14px; 
                        height:14px; 
                        background-color:#f47360; 
                        border-radius:50%; 
                        display:inline-block; 
                        margin-right:10px;">
                    </span>

                    <h4 class="mb-0" style="font-family:'Abhaya Libre', serif; font-size:2rem;">
                        {{ $edu['institution'] }} | {{ $edu['years'] }}
                    </h4>
                </div>

                <p class="mb-0" style="color:#f47360; font-weight:600; font-size:1.2rem;">
                    {{ $edu['degree'] }}
                </p>

                <p class="mb-0 text-white-50">
                    {{ $edu['field'] }}
                </p>
            </div>
        @endforeach
    </div>
</section>
