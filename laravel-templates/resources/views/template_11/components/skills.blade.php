<section class="skills-section py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Skills</h2>
        <div class="row g-4">
            @foreach ($skills as $category => $items)
                <div class="col-md-6">
                    <div class="card shadow-lg border-0 h-100 p-4">
                        <div class="card-body text-dark">
                            <h5 class="fw-bold text-green">{{ $category }}</h5>
                            <ul class="list-unstyled">
                                @foreach ($items as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
