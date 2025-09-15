<section class="py-5" style="color:white;">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Hobbies 🎨</h2>
        <div class="row text-center">
            @foreach($hobbies as $hobby)
                <div class="col-md-3 col-6 mb-4">
                    <div class="p-4 shadow rounded-3 h-100" style="background:white;">
                        <div style="font-size:2rem;">{{ $hobby['emoji'] }}</div>
                        <h6 class="mt-2 text-black">{{ $hobby['name'] }}</h6>
                        <small class="text-black">{{ $hobby['description'] }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
