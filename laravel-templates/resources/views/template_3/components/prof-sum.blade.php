<section class="container my-5" x-data="{ show: true }">
    <h2 class="display-5 fw-bold mb-4 text-white">
        <span class="text-primary">Professional</span> Summary
        <hr class="border-2" style="border-color:#4169E1; width:435px;">
    </h2>

    <!-- Summary -->
    <div x-show="show" x-transition>
        <p class="fs-5 text-white">{{ $summary }}</p>
    </div>

    <!-- Socials -->
    <div class="d-flex gap-5 mt-4">
        @if(!empty($socials['twitter']))
            <a href="{{ $socials['twitter'] }}" target="_blank" class="d-inline-block" title="Twitter">
                <img src="/images/twitter.png" alt="Twitter" width="24" height="24" style="background-color: white; border-radius: 50%;">
            </a>
        @endif

        @if(!empty($socials['linkedin']))
            <a href="{{ $socials['linkedin'] }}" target="_blank" class="d-inline-block" title="LinkedIn">
                <img src="/images/linkedin.png" alt="LinkedIn" width="24" height="24" style="background-color: white; border-radius: 50%;">
            </a>
        @endif

        @if(!empty($socials['instagram']))
            <a href="{{ $socials['instagram'] }}" target="_blank" class="d-inline-block" title="Instagram">
                <img src="/images/insta.png" alt="Instagram" width="24" height="24" style="background-color: white; border-radius: 50%;">
            </a>
        @endif
    </div>
</section>
