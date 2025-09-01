<section class="container-fluid py-5 position-relative">

    <div class="mb-4 text-center">
        <h2 class="fw-bold" style="color:#4169E1;">EXPERIENCE</h2>
        <hr class="border-2 mx-auto" style="border-color:#4169E1; width:220px;">
    </div>

    <!-- Background grid -->
    <img src="{{ asset('images/grid-blue.png') }}" alt="Shape frame"
         style="position:absolute; top:30%; right:0; max-width:100%; height:auto; z-index:0; pointer-events:none;">

    <div class="container position-relative" style="z-index:1;">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <ul class="timeline list-unstyled">
                    @foreach($experience as $exp)
                    <li class="mb-5 position-relative">
                        <!-- Timeline circle -->
                        <div class="timeline-marker"></div>

                        <!-- Content -->
                        <div class="ps-5">
                            <h5 class="fw-bold" style="color:#4169E1;">{{ $exp['company'] }}</h5>
                            <p class="mb-1" style="color:#ddd;">{{ $exp['position'] }}</p>
                            <p class="mb-1" style="color:#ddd;">{{ $exp['desc'] }}</p>
                            <small style="color:#aaa;">{{ $exp['start'] }} - {{ $exp['end'] }}</small>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</section>
