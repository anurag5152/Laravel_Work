<section class="container-fluid py-5" >
    <div class="container">
        
        <div class="mb-5 text-center">
            <h2 class="fw-bold" style="font-size:2.5rem; font-family: 'Magra', sans-serif;">
                Skills
            </h2>
            <hr class="mx-auto" style="border:2px solid #C16078; width:12%;">
        </div>

        <div class="row g-4">
            @foreach($skills as $category)
                <div class="col-md-4">
                    <div class="p-4 h-100 rounded shadow" style="background-color:#F2CABB; border: 2px solid #C16078">
                        <h5 class="fw-bold text-center mb-3" style="font-family: 'Magra', sans-serif; ">
                            {{ $category['name'] }}
                        </h5>
                        
                        <ul class="list-unstyled mb-0">
                            @foreach($category['items'] as $skill)
                                <li class="mb-2 d-flex align-items-center">
                                    <span class="me-2 " style="color: #C16078">•</span>
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
