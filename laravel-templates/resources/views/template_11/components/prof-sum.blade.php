<section class="about-section py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">About Me</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0 p-4">
                    <div class="card-body text-dark">
                        <p class="mb-0">
                            {{ $bio }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-4">
                    <div class="col-md-6" >
                        <div class="card h-100 shadow-lg border-0 text-center p-4">
                            <div class="card-body">
                                <h1 class="fw-bold">{{ $customers }}</h1>
                                <p class="mb-0">SATISFIED CUSTOMERS</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-lg border-0 text-center p-4">
                            <div class="card-body">
                                <h1 class="fw-bold">{{ $experience }}</h1>
                                <p class="mb-0">YEARS OF EXPERIENCE</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <a href="{{ $exploreLink }}" class="card h-100 shadow-lg border-0 text-center p-4 text-decoration-none text-dark">
                            <div class="card-body">
                                <h5 class="fw-bold mb-0">Explore More</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="{{ $cvLink }}" class="card h-100 shadow-lg border-0 text-center p-4 text-decoration-none text-dark">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <h6 class="fw-bold mb-2">Download CV</h6>
                                <span class="fs-4">➔</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4" >
            <div class="col-md-6" style="height: 250px; object-fit: cover;">
                <div class="card shadow-lg border-0 h-100">
                    <img src="{{ $images[0] ?? 'https://via.placeholder.com/500x300' }}" 
                         alt="About image 1" class="img-fluid rounded" style="height: 250px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6" style="height: 250px; object-fit: cover;">
                <div class="card shadow-lg border-0 h-100">
                    <img src="{{ $images[1] ?? 'https://via.placeholder.com/500x300' }}" 
                         alt="About image 2" class="img-fluid rounded" style="height: 250px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>
