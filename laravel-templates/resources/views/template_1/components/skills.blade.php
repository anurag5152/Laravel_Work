<section class="container-fluid py-5" x-data="{ show: true }">

    <div class="mb-4 text-start">
        <h2 class="fw-bold">
            <span style="color:#00ff66;">SKILLS</span>
        </h2>
        <hr class="border-2" style="border-color:#00ff66; width:110px;">
    </div>

    <div class="row">
        @foreach($skills as $skill)
        <div class="col-md-6 mb-3" x-show="show" x-transition>
            <div class="card shadow-sm border-2 text-white" style="border-color:#00ff66 !important; background-color:#1f2937;">
                <div class="card-body">
                    <h5 class="fw-bold">{{ $skill['category'] }}</h5>
                    <ul class="mb-0">
                        @foreach($skill['skills_list'] as $item)
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