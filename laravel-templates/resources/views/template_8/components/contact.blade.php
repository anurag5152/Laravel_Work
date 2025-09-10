<section class="py-5" style="background-color:#1a1a1a; color:white;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h6 class="text-uppercase">Contact Info</h6>
                <h2 class="fw-bold mb-4" style="font-family: 'Amaranth', sans-serif;">
                    Get in Touch
                </h2>

                <div class="d-flex align-items-center mb-3">
                    <span class="me-3">
                        <img src="{{asset('images/email8.png')}}" alt="Email Icon" width="24" height="24">
                    </span>
                    <div>
                        <small class="d-block ">Talk to us:</small>
                        <p class="mb-0">{{ $contact['email'] }}</p>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <span class="me-3">
                        <img src="{{asset('images/number8.png')}}" alt="Phone Icon" width="24" height="24">
                    </span>
                    <div>
                        <small class="d-block ">Call us:</small>
                        <p class="mb-0">{{ $contact['phone'] }}</p>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <span class="me-3">
                        <img src="{{asset('images/location8.png')}}" alt="Location Icon" width="24" height="24">
                    </span>
                    <div>
                        <small class="d-block ">Address:</small>
                        <p class="mb-0">{{ $contact['address'] }}</p>
                    </div>
                </div>
                <h6 class="fw-bold">Follow Us:</h6>
                <div class="d-flex gap-5">
                    <a href="{{ $contact['social']['twitter'] }}" target="_blank" class="text-white fs-5">
                        <img src="{{asset('images/twitter8.png')}}" alt="Twitter" width="24" height="24">
                    </a>
                    <a href="{{ $contact['social']['linkedin'] }}" target="_blank" class="text-white fs-5">
                        <img src="{{asset('images/linkedin8.png')}}" alt="LinkedIn" width="24" height="24">
                    </a>
                    <a href="{{ $contact['social']['instagram'] }}" target="_blank" class="text-white fs-5">
                        <img src="{{asset('images/insta8.png')}}" alt="Instagram" width="24" height="24">
                    </a>
                </div>

            </div>

            <div class="col-md-6">
                <h2 class="fw-bold mb-3" style="font-family: 'Amaranth', sans-serif;">
                    Contact Us
                </h2>
                <p class="text-primary mb-4">Got a Project? Let's talk</p>

                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control bg-transparent text-white border border-primary" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control bg-transparent text-white border border-primary" placeholder="Last Name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control bg-transparent text-white border border-primary" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <input type="url" class="form-control bg-transparent text-white border border-primary" placeholder="Company URL">
                        </div>
                        <div class="col-12">
                            <textarea rows="4" class="form-control bg-transparent text-white border border-primary" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn mt-4 px-4"
                        style="background:linear-gradient(90deg, #2ec4f3, #3636f6); color:white; border:none;">
                        SEND
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>