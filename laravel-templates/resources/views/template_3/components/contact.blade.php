<section class="container my-5 text-center text-white">
    <h2 class="fw-bold mb-2" style="font-size: 1.8rem;">Ready to collaborate on your next project?</h2>
    <p class="mb-4" style="font-size: 1.6rem;">Let's build something amazing together!</p>

    <form x-data="{ sending: false }" 
          @submit.prevent="sending = true; $el.submit();"
          class="mx-auto" 
          style="max-width: 600px;">

        <div class="mb-3">
            <input type="text" name="full_name" class="form-control rounded-pill bg-transparent text-white border-info" placeholder="Full Name" required>
        </div>

        <div class="mb-3">
            <input type="email" name="email" class="form-control rounded-pill bg-transparent text-white border-info" placeholder="Email-id" required>
        </div>

        <div class="mb-3">
            <input type="url" name="company_url" class="form-control rounded-pill bg-transparent text-white border-info" placeholder="Company-url">
        </div>

        <div class="mb-3">
            <textarea name="message" rows="4" class="form-control bg-transparent text-white border-info rounded-pill" placeholder="Your Message" required></textarea>
        </div>

        <button type="submit" 
                class="btn btn-outline-info rounded-pill px-4" 
                style="font-size: 1.5rem;"
                :disabled="sending">
            <span x-show="!sending">Send</span>
            <span x-show="sending">Sending...</span>
        </button>
    </form>
</section>
