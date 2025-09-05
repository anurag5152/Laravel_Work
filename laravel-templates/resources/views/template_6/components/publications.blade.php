<section class="py-5 text-center" style="background-image: url('{{ asset('images/bggg6.png') }}'); background-size: cover; background-position: center;">
    <div class="container">

        <h2 class="fw-bold mb-4">Publications</h2>
        <hr class="mx-auto" style="border:2px solid #C16078; width:18%;">
        <div class="row g-4 justify-content-center">
            @foreach($publications as $publication)
            <div class="col-md-4">
                <div class="p-4 rounded shadow-sm"
                    style="background-color:#F2CABB; border:2px solid #C16078;">

                    <h5 class="fw-bold mb-1">{{ $publication['title'] }}</h5>

                    <p class="text-muted small mb-3">
                        {{ $publication['journal'] }} | {{ $publication['year'] }}
                    </p>

                    <p class="mb-0">{{ $publication['summary'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>