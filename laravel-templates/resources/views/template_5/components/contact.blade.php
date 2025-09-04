<section class="container-fluid py-5" style="color:white;">
    <div class="container" x-data="{ sending: false }">
        
        <div class="mb-5 text-center">
            <h2 class="fw-bold" style="font-size:2.5rem; font-family: 'Magra', sans-serif;">
                Get In <span style="color:#00b4d8;">Touch</span>
            </h2>
        </div>

        <form @submit.prevent="sending = true" class="mx-auto" style="max-width: 700px;">
            
            <div class="mb-4">
                <input type="text" class="form-control text-white fw-bold"
                       style="background-color:#1c2a4a; border:1px solid #00b4d8; border-radius:10px; font-family:'Magra', sans-serif;"
                       placeholder="Full Name" required>
            </div>

            <div class="row mb-4">
                <div class="col-md-6 mb-3 mb-md-0">
                    <input type="email" class="form-control text-white fw-bold"
                           style="background-color:#1c2a4a; border:1px solid #00b4d8; border-radius:10px; font-family:'Magra', sans-serif;"
                           placeholder="Email-id" required>
                </div>
                <div class="col-md-6">
                    <input type="url" class="form-control text-white fw-bold"
                           style="background-color:#1c2a4a; border:1px solid #00b4d8; border-radius:10px; font-family:'Magra', sans-serif;"
                           placeholder="Company url">
                </div>
            </div>

            <div class="mb-4">
                <textarea rows="4" class="form-control text-white fw-bold"
                          style="background-color:#1c2a4a; border:1px solid #00b4d8; border-radius:10px; font-family:'Magra', sans-serif;"
                          placeholder="Your message" required></textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn fw-bold px-4"
                        style="background-color:#00b4d8; color:white; border-radius:8px; font-family:'Magra', sans-serif;"
                        x-text="sending ? 'Sending...' : 'Send'"></button>
            </div>
        </form>

    </div>
</section>
