<section class="py-5" style="background-color: #50736ACC;">
    <div class="container text-center text-white" style="text-transform: none;">
        <h2 class="fw-bold mb-3" style="font-family: 'Amaranth', sans-serif; text-transform: none;">
            About Me
        </h2>
        <hr class="mx-auto" style="border:3px solid #4462ff; width:12%; ">
        
        <p class="mt-4" style="font-family: 'Aboreto', cursive; text-transform: none;">
            {{ $summary }}
        </p>

        <p class="mt-3" style="text-transform: none;">
            <a href="mailto:{{ $email }}" 
               class="text-white fw-bold" 
               style="text-decoration: underline; text-transform: none;">
                {{ $email }}
            </a>
        </p>
    </div>
</section>
