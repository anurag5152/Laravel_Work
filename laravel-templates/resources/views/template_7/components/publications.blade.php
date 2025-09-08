<div class="section-wrapper" x-data="{ publications: @js($publications) }">
    <h2 class="text-center fw-bold mb-5" style="font-family: 'Marko One', serif; font-size: 2.5rem;">
        Publications
    </h2>

    <div class="container">
        <div class="row g-4">
            <template x-for="(pub, index) in publications" :key="index">
                <div class="col-12 col-md-6">
                    <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; background: #43A047;">
                        <div class="card-body text-white">
                            <h5 class="fw-bold" x-text="pub.title"></h5>
                            <p class="mb-1"><strong x-text="pub.publisher"></strong></p>
                            <p class="mb-2" x-text="pub.date"></p>
                            <p x-text="pub.description"></p>
                            <a :href="pub.link" target="_blank" class="btn btn-sm btn-dark mt-2">Read</a>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
