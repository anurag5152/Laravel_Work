<section class="py-5 text-center text-dark"
    style="background-image: url('{{ asset('images/bgg6.png') }}'); background-size: cover; background-position: center;">

    <div class="container">

        <h2 class="fw-bold mb-4">{{ $title }}</h2>

        <p class="mx-auto" style="max-width: 900px; line-height: 1.8;">
            {{ $description }}
        </p>

        <div class="mt-4 d-flex justify-content-center gap-3">

            <a href="https://instagram.com" target="_blank"
                class="d-flex align-items-center justify-content-center bg-light shadow-sm"
                style="width: 50px; height: 50px; overflow: hidden;">
                <img src="{{ asset('images/insta.png') }}" alt="Twitter" style="width: 24px; height: 24px;">
            </a>


            <a href="https://linkedin.com" target="_blank"
                class="d-flex align-items-center justify-content-center bg-light shadow-sm"
                style="width: 50px; height: 50px; overflow: hidden;">
                <img src="{{ asset('images/linkedin.png') }}" alt="Twitter" style="width: 24px; height: 24px;">
            </a>


            <a href="https://twitter.com" target="_blank"
                class="d-flex align-items-center justify-content-center bg-light shadow-sm"
                style="width: 50px; height: 50px; overflow: hidden;">
                <img src="{{ asset('images/twitter.png') }}" alt="Twitter" style="width: 24px; height: 24px;">
            </a>


        </div>

    </div>
</section>