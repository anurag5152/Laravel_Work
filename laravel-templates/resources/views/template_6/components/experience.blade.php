<section class="py-5 text-center">
    <div class="container">

        <h2 class="fw-bold mb-4">My Experience</h2>
        <hr class="mx-auto" style="border:2px solid #C16078; width:18%;">
        <div class="row g-4 justify-content-center">
            @foreach($experiences as $experience)
            <div class="col-md-4">
                <div class="p-4 rounded shadow-sm"
                    style="background-color:#F2CABB; border:2px solid #C16078;">

                    <h5 class="fw-bold mb-1">{{ $experience['role'] }}</h5>

                    <p class="text-muted small mb-3">
                        {{ $experience['company'] }} | {{ $experience['duration'] }}
                    </p>

                    <p class="mb-0">{{ $experience['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>