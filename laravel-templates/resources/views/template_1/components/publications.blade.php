<section class="container-fluid py-5 position-relative" style="background-color:black; color:white;">

    {{-- Right side images --}}
    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-0 end-0 translate-middle-x"
        style="z-index: 0; opacity: 0.1; width: 120%; max-width: 300px;">

    <img src="{{ asset('images/boxes.png') }}"
        class="position-absolute top-0 end-0 translate-middle-x"
        style="z-index: 0; opacity: 0.1; width: 120%; max-width: 300px;">

    <div class="container">
        <div class="mb-4 text-center">
            <h2 class="fw-bold" style="color:#00ff66;">PUBLICATIONS</h2>
            <hr class="border-2 mx-auto" style="border-color:#00ff66; width:220px;">
        </div>

        <ul class="list-group list-group-flush">
            @foreach($publications as $pub)
            <li class="list-group-item bg-transparent text-white border-0 mb-3">
                <h5 class="fw-bold mb-1">{{ $pub['title'] }}</h5>
                <p class="mb-1">{{ $pub['publisher'] }} — <small>{{ $pub['year'] }}</small></p>
                <a href="{{ $pub['link'] }}" target="_blank" class="text-success">View Publication</a>
            </li>
            @endforeach
        </ul>
    </div>
</section>