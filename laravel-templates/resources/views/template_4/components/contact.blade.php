<section class="container my-5 text-center">
    <h2 class="display-5 fw-bold mb-4" style="color:#f47360;">
        Get in touch
    </h2>

    <form method="POST" class="mx-auto" style="max-width: 700px;">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" class="form-control contact-input"
                   placeholder="Full Name" required>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 mb-3 mb-md-0">
                <input type="email" name="email" class="form-control contact-input"
                       placeholder="Email-id" required>
            </div>
            <div class="col-md-6">
                <input type="url" name="company_url" class="form-control contact-input"
                       placeholder="Company-url">
            </div>
        </div>

        <div class="mb-3">
            <textarea name="message" rows="5" class="form-control contact-input"
                      placeholder="Your message" required></textarea>
        </div>

        <button type="submit" class="btn contact-btn px-5 py-2 fw-bold" style="border-color: #f47360; color:white">
            SEND
        </button>
    </form>
</section>

