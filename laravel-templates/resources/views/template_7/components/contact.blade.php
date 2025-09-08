<div class="section-wrapper" style="background: linear-gradient(135deg, #073642, #0f3d3e); color: white; padding: 4rem 2rem;">
    <div class="container">
        <h2 class="text-center fw-bold mb-2" style="font-family: 'Marko One', serif; font-size: 2rem;">
            Let’s Build Something epic
        </h2>
        <p class="text-center mb-5" style="font-family: 'Inria Sans', sans-serif; font-size: 1.2rem; color: #7ee18d;">
            Ready to turn your crazy ideas into scalable reality? Let's chat.
        </p>

        <div class="row align-items-start g-5">
            <div class="col-md-5">
                <div class="mb-4 p-3 rounded-3" style="background: #43A047; color: white;">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('images/email.png') }}" alt="Email Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                        <h5 class="mb-0 fw-bold">Email</h5>
                    </div>
                    <a href="mailto:{{ $contact['email'] }}" class="text-white small d-block">
                        {{ $contact['email'] }}
                    </a>
                    <span class="small">send a message</span>
                </div>
                <div class="mb-4 p-3 rounded-3" style="background: #43A047; color: white;">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('images/whats.png') }}" alt="WhatsApp Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                        <h5 class="mb-0 fw-bold">Whatsapp</h5>
                    </div>
                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $contact['whatsapp']) }}" 
                       target="_blank" class="text-white small d-block">
                        {{ $contact['whatsapp'] }}
                    </a>
                    <span class="small">send a message</span>
                </div>

                <div class="mb-4 p-3 rounded-3" style="background: #43A047; color: white;">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('images/insta.png') }}" alt="Instagram Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                        <h5 class="mb-0 fw-bold">Instagram</h5>
                    </div>
                    <a href="https://instagram.com/{{ ltrim($contact['instagram'], '@') }}" 
                       target="_blank" class="text-white small d-block">
                        {{ $contact['instagram'] }}
                    </a>
                    <span class="small">send a message</span>
                </div>
            </div>
            <div class="col-md-7">
                <form class="d-flex flex-column gap-3">
                    <input type="text" class="form-control border-success" placeholder="Full name">
                    <input type="email" class="form-control border-success" placeholder="Email id">
                    <input type="text" class="form-control border-success" placeholder="Company url">
                    <textarea class="form-control border-success" rows="4" placeholder="Your message"></textarea>
                    <button type="submit" class="btn px-4 mt-2"
                            style="background: #43A047; color: white; border-radius: 10px; font-weight: bold;">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
