<div class="prof-sum-section py-5 px-4" 
     style="background-image: url('{{ asset('images/bg7.png') }}'); 
            background-size: cover; 
            background-position: center; 
            width: 100%;">
    <div class="container-fluid">
        <div class="card shadow-lg p-4 text-center mx-auto" 
             style="background: rgba(255,255,255,0.95); border-radius: 15px; max-width: 900px;">
            
            <h2 class="fw-bold mb-4" style="color:#064420; font-family: 'Marko One', serif;">
                About Me
            </h2>
            <p class="mb-4" style="font-family: 'Inria Sans', sans-serif; font-size: 1rem; line-height: 1.8;">
                {{ $paragraph }}
            </p>
            
            <div class="d-flex justify-content-center gap-3">
                @if(!empty($links['twitter']))
                    <a href="{{ $links['twitter'] }}" target="_blank">
                        <img src="{{ asset('images/twitter.png') }}" alt="Twitter" 
                             style="width:40px; height:40px; border-radius:20%;">
                    </a>
                @endif
                @if(!empty($links['linkedin']))
                    <a href="{{ $links['linkedin'] }}" target="_blank">
                        <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" 
                             style="width:40px; height:40px; border-radius:20%;">
                    </a>
                @endif
                @if(!empty($links['instagram']))
                    <a href="{{ $links['instagram'] }}" target="_blank">
                        <img src="{{ asset('images/insta.png') }}" alt="Instagram" 
                             style="width:40px; height:40px; border-radius:20%;">
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
