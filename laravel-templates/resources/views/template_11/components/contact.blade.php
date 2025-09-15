<section class="contact-section py-5" style="background-color:#000; color:white;">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Let’s Build Something epic</h2>
        <p class="text-center mb-5" style="font-size:1.1rem;">
            Ready to turn your crazy ideas into scalable reality? Let's chat.
        </p>
        <div class="row">
            <div class="col-md-5 mb-4">
                @foreach($contacts as $contact)
                <div class="card mb-4 shadow-sm" style="border-radius: 12px;">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">{{ $contact['icon'] }} {{ $contact['type'] }}</h5>
                        <p class="mb-1">{{ $contact['value'] }}</p>
                        <a href="{{ $contact['link'] }}" target="_blank" class="text-decoration-none">
                            send a message
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-7">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Full name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email id">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Company url">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-light fw-bold px-4">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <div class="background-circles">
        <div class="circle circle1" style="width: 190px; height: 190px; top: 20%; left: -2%;"></div>
        <div class="circle circle2" style="width: 150px; height: 150px; top: 90%; left: 50%;"></div>
        <div class="circle circle3" style="width: 270px; height: 270px; top: 90%; left: 20%;"></div>
        <div class="circle circle4" style="width: 250px; height: 250px; top: 26%; left: 80%;"></div>
    </div>
</section>