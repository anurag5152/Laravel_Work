<section class="container my-5">
    <h2 class="display-5 fw-bold mb-4 text-center" style="color:#f47360;">
        Hobbies & Interests
    </h2>

    <div class="row justify-content-center g-4">
        @foreach($hobbies as $hobby)
        <div class="col-6 col-md-3">
            <div class="d-flex flex-column align-items-center text-center p-4 h-100"
                style="background:#2f343b; border-radius:15px; color:white; transition:0.3s;">

                <div class="mb-3 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('images/image.png') }}" alt="" style="width:70px; height:70px;  border-radius:50%;">
                </div>

                <h6 class="fw-bold mb-1" style="color: #f47360;">{{ $hobby['name'] }}</h6>
                <p class="mb-0" style="font-size:0.9rem;">{{ $hobby['description'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>