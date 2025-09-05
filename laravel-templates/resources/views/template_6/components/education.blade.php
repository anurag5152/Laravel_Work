<section class="py-5 text-center" style="background-image: url('{{ asset('images/bggg6.png') }}'); background-size: cover; background-position: center;">
    <div class="container">

        <h2 class="fw-bold mb-4">Education</h2>
        <hr class="mx-auto" style="border:2px solid #C16078; width:12%;">

        <div class="row justify-content-center g-4">
            @foreach($educations as $edu)
                <div class="col-md-4">
                    <div class="p-4 h-100"
                         style="background-color: #F2CABB; border: 2px solid #C16078; border-radius: 12px;">
                        <h5 class="fw-bold">{{ $edu['university'] }}</h5>
                        <p class="mb-1">{{ $edu['degree'] }}</p>
                        <small>{{ $edu['year'] }}</small>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
