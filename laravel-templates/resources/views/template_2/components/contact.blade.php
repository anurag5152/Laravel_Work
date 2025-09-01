<section class="container-fluid py-5">
    <div class="container">
        <div class="mb-4 text-center">
            <h2 class="fw-bold">Get In <span style="color:#00BFFF;">Touch</span></h2>
            <hr class="border-2 mx-auto" style="border-color:#00BFFF; width:220px;">
        </div>

        <form x-data="contactForm()" x-on:submit.prevent="submitForm" class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control bg-dark text-white border-primary" placeholder="Full name" x-model="name" required>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control bg-dark text-white border-primary" placeholder="Email-id" x-model="email" required>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control bg-dark text-white border-primary" placeholder="Company-url" x-model="company">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control bg-dark text-white border-primary" placeholder="Phone number" x-model="phone">
            </div>
            <div class="col-12">
                <textarea class="form-control bg-dark text-white border-primary" rows="5" placeholder="Your message" x-model="message" required></textarea>
            </div>
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary px-4">Send</button>
            </div>
        </form>

        <template x-if="successMessage">
            <div class="alert alert-success mt-3" x-text="successMessage"></div>
        </template>

    </div>
</section>

