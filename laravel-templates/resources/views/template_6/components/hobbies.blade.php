<section class="py-5 text-center" style="background-image: url('{{ asset('images/bggg6.png') }}'); background-size: cover; background-position: center;">
    <div class="container">

        <h2 class="fw-bold mb-4">Hobbies</h2>
        <hr class="mx-auto" style="border:2px solid #C16078; width:16%;">
        <div class="row g-4 justify-content-center">
            @foreach($hobbies as $hobby)
            <div class="col-md-3">
                <div class="p-4 rounded shadow-sm h-100 d-flex flex-column align-items-center justify-content-center"
                    style="background-color:#F2CABB; border:2px dashed #C16078;">

                    <div class="rounded-circle d-flex align-items-center justify-content-center mb-3"
                        style="width:60px; height:60px; background:#fff; border:2px solid #C16078;">
                        <span style="font-size: 1.5rem; color:#C16078;">🎨</span>
                    </div>

                    <h6 class="fw-bold">{{ $hobby['name'] }}</h6>

                    <p class="small mb-0">{{ $hobby['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>