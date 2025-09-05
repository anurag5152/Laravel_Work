<section class="py-5 text-center">
    <div class="container">

        <h2 class="fw-bold mb-4">Awards</h2>
        <hr class="mx-auto" style="border:2px solid #C16078; width:16%;">
        <div class="row g-4 justify-content-center">
            @foreach($awards as $award)
            <div class="col-md-4">
                <div class="p-4 rounded shadow-sm text-start h-100"
                    style="background-color:#F2CABB; border-left:6px solid #C16078;">

                    <div class="d-flex align-items-center mb-3">
                        <span class="me-2" style="font-size: 1.8rem; color:#C16078;">🏆</span>
                        <h5 class="fw-bold mb-0">{{ $award['title'] }}</h5>
                    </div>

                    <span class="badge rounded-pill text-dark mb-2"
                        style="background-color:#fff; border:1px solid #C16078;">
                        {{ $award['organization'] }} | {{ $award['year'] }}
                    </span>

                    <p class="mb-0 small">{{ $award['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>