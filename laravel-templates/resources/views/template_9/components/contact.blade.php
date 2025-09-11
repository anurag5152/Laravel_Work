<section class="container py-5 text-center text-white">
    <h2 class="fw-bold mb-3">Let’s Build Something epic</h2>
    <h5 class="mb-5" style="color:#00e0ff;">
        Ready to turn your crazy ideas into scalable reality? Let's chat.
    </h5>

    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 mb-4">
            <div class="d-flex flex-column gap-4">
                <div class="p-3 rounded-3 text-dark" style="background:#00e0ff;">
                    <h5>Email</h5>
                    <p class="mb-1">{{ $contact['email'] }}</p>
                    <small><a href="mailto:{{ $contact['email'] }}" class="text-dark">send a message</a></small>
                </div>

                <div class="p-3 rounded-3 text-dark" style="background:#00e0ff;">
                    <h5>Whatsapp</h5>
                    <p class="mb-1">{{ $contact['whatsapp'] }}</p>
                    <small><a href="https://wa.me/{{ $contact['whatsapp'] }}" target="_blank" class="text-dark">send a message</a></small>
                </div>

                <div class="p-3 rounded-3 text-dark" style="background:#00e0ff;">
                    <h5>Instagram</h5>
                    <p class="mb-1">{{ $contact['instagram'] }}</p>
                    <small><a href="https://instagram.com/{{ $contact['instagram'] }}" target="_blank" class="text-dark">send a message</a></small>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-7">
            <form x-data="{sending:false}" @submit.prevent="sending=true" class="text-start">
                <div class="mb-3">
                    <input type="text" class="form-control border-info text-white bg-transparent" placeholder="Full name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control border-info text-white bg-transparent" placeholder="Email id">
                </div>
                <div class="mb-3">
                    <input type="url" class="form-control border-info text-white bg-transparent" placeholder="Company url">
                </div>
                <div class="mb-3">
                    <textarea class="form-control border-info text-white bg-transparent" rows="5" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="btn px-4 py-2 fw-bold text-white" style="background:#00e0ff;">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
