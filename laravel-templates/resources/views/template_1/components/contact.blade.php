<section class="container py-5 text-center">
  <div class="mb-4">
    <h2 class="fw-bold" style="color:#fff;">Let's Build Something Epic</h2>
    <p style="color:#00ff66;">
      Ready to turn your crazy ideas into scalable reality? Let's chat.
    </p>
  </div>

  <form class="mx-auto" style="max-width: 700px;">
    @csrf

    <!-- Full Name -->
    <div class="mb-3">
      <input type="text" name="name" class="form-control text-white"
             placeholder="Full Name"
             style="background-color:black; border:2px solid #00ff66; border-radius:30px; padding:12px;">
    </div>

    <!-- Email & Company -->
    <div class="d-flex flex-column flex-md-row gap-3 mb-3">
      <input type="email" name="email" class="form-control text-white"
             placeholder="Email-id"
             style="background-color:black; border:2px solid #00ff66; border-radius:30px; padding:12px;">

      <input type="text" name="company" class="form-control text-white"
             placeholder="Company-url"
             style="background-color:black; border:2px solid #00ff66; border-radius:30px; padding:12px;">
    </div>

    <!-- Message -->
    <div class="mb-3">
      <textarea name="message" rows="4" class="form-control text-white"
                placeholder="Your message"
                style="background-color:black; border:2px solid #00ff66; border-radius:30px; padding:12px;"></textarea>
    </div>

    <!-- Submit -->
    <button type="submit" class="px-4 py-2 fw-bold"
            style="background-color:#00ff66; border:none; border-radius:6px; color:black;">
      Send
    </button>
  </form>
</section>
