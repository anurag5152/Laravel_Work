<section class="py-5" style="background-color: #50736ACC; color:#fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pub-title">
                <h2 class="fw-bold mb-3" style="font-family: 'Amaranth', sans-serif; text-transform:none;">
                    Publications
                </h2>
                <hr class="mb-4 pub-border" style="border:3px solid #4462ff; width:40%;">
                <p class="mt-3">
                    I have authored impactful research and articles that showcase my expertise and curiosity in emerging technologies. These publications reflect my commitment to continuous learning and knowledge sharing </p>
            </div>
            <div class="col-md-8" x-data="{ publications: {{ Js::from($publications) }} }">
                <template x-for="pub in publications" :key="pub.id">
                    <div class="mb-4 p-3 rounded shadow-sm" style="background:#1a1a1a;">
                        <h5 class="fw-bold mb-1" style="font-family: 'Amaranth', sans-serif;" x-text="pub.title"></h5>
                        <p class="mb-1">
                            <span x-text="pub.publisher"></span> •
                            <small class="text-primary fw-bold" x-text="pub.year"></small>
                        </p>
                        <p class="mb-2" x-text="pub.description"></p>
                        <a :href="pub.link" target="_blank" class="btn btn-outline-primary btn-sm">
                            View Publication
                        </a>
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>