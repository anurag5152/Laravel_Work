<section class="container-fluid py-5 text-center" 
         style="background-image: url('{{ asset('images/bg12.png') }}'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat; color:white;">
    <div class="container">
        <h2 class="fw-bold mb-4">
            Projects
        </h2>

        <p class="mb-5" style="max-width: 800px; margin: 0 auto;">
            {{ $description }}
        </p>

        <div class="row g-4 justify-content-center">
            @foreach($projects as $project)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden">
                        <img src="{{ asset($project['image']) }}" style="max-height: 40vh;" class="card-img-top" alt="Project Image">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold" style="color:#A9876D;">
                                {{ $project['title'] }}
                            </h5>
                            <p class="card-text flex-grow-1" style="color:#70635C;">
                                {{ $project['description'] }}
                            </p>
                            <a href="{{ $project['link'] }}" target="_blank" class="btn btn-outline-dark rounded-pill mt-3">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
   .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}
</style>