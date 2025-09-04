<section class="container-fluid py-5" style="background-color:#0c1b33; color:white;">
    <div class="container">
        
        <div class="mb-5 text-center">
            <h2 class="fw-bold" style="font-size:2.5rem; font-family: 'Magra', sans-serif;">
                Skills
            </h2>
            <hr class="mx-auto" style="border:2px solid #00b4d8; width:12%;">
        </div>

        <div class="row g-4">
            @foreach($skills as $category)
                <div class="col-md-4">
                    <div class="p-4 h-100 rounded shadow" style="background-color:#1c2a4a;">
                        <h5 class="fw-bold text-center mb-3" style="font-family: 'Magra', sans-serif; color:#00b4d8;">
                            {{ $category['name'] }}
                        </h5>
                        
                        <ul class="list-unstyled mb-0">
                            @foreach($category['items'] as $skill)
                                <li class="mb-2 d-flex align-items-center">
                                    <span class="me-2 text-white-50">•</span>
                                    <span>{{ $skill }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
