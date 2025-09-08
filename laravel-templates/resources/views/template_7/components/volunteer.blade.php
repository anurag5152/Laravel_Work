<div class="section-wrapper" style="background-color: #0f3d3e; color:white;" x-data="{ volunteers: @js($volunteers) }">
    <h2 class="text-center fw-bold mb-5" style="font-family: 'Marko One', serif; font-size: 2.5rem;">
        Volunteer
    </h2>

    <div class="container">
        <div class="row g-4">
            <template x-for="(volunteer, index) in volunteers" :key="index">
                <div class="col-12 col-md-6">
                    <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; background: #43A047;">
                        <div class="card-body text-white">
                            <h5 class="fw-bold" x-text="volunteer.title"></h5>
                            <p class="mb-1"><strong x-text="volunteer.organization"></strong></p>
                            <p class="mb-2" x-text="volunteer.date"></p>
                            <p x-text="volunteer.description"></p>
                            <a :href="volunteer.link" target="_blank" class="btn btn-sm btn-dark mt-2">View</a>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
