<div class="section-wrapper" style="background-color: #0f3d3e; color:white;" x-data="{ awards: @js($awards) }">
    <h2 class="text-center fw-bold mb-5" style="font-family: 'Marko One', serif; font-size: 2.5rem;">
        Awards
    </h2>

    <div class="container">
        <div class="list-group">
            <template x-for="(award, index) in awards" :key="index">
                <a :href="award.link" target="_blank" class="list-group-item list-group-item-action mb-3 border-0 shadow-sm"
                   style="border-radius: 15px; background: #357a38; color: white;">
                    <h5 class="mb-1 fw-bold" x-text="award.title"></h5>
                    <p class="mb-1"><strong x-text="award.issuer"></strong> – <span x-text="award.date"></span></p>
                    <small x-text="award.description"></small>
                </a>
            </template>
        </div>
    </div>
</div>
