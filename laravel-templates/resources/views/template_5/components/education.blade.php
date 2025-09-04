<section class="container-fluid py-5" >
    <div class="container">
        <h2 class="fw-bold mb-4 text-center" 
            style="color:highlight;font-size:2.5rem;">
            Education
        </h2>
        <hr class="mx-auto" style="border:2px solid highlight; width:16%;">

        @foreach($education as $edu)
            <div class="mb-4">
                <div class="d-flex align-items-center">
                    <span style="
                        width:14px; 
                        height:14px; 
                        background-color:highlight; 
                        border-radius:50%; 
                        display:inline-block; 
                        margin-right:10px;">
                    </span>

                    <h4 class="mb-0" style="font-size:2rem;">
                        {{ $edu['institution'] }} | {{ $edu['years'] }}
                    </h4>
                </div>

                <p class="mb-0" style="color:highlight; font-weight:600; font-size:1.2rem;">
                    {{ $edu['degree'] }}
                </p>

                <p class="mb-0 text-white-50">
                    {{ $edu['field'] }}
                </p>
            </div>
        @endforeach
    </div>
</section>
