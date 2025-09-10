<section class="py-5" style="background-color:#1a1a1a; color:#fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="fw-bold mb-3 award-title" style="font-family: 'Amaranth', sans-serif; text-transform:none;">
                    Awards
                </h2>
                <hr class="mb-4 award-border" style="border:3px solid #4462ff; width:35%;">
                <p class="mt-3">
                    My achievements highlight dedication, innovation, and excellence across academics and professional endeavors. These awards reflect both recognition of my skills and my drive to keep pushing boundaries. </p>
            </div>

            <div class="col-md-8" x-data="{ awards: {{ Js::from($awards) }} }">
                <template x-for="award in awards" :key="award.id">
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <div class="rounded-circle d-flex justify-content-center align-items-center shadow"
                                style="width:55px; height:55px; background:linear-gradient(90deg, #2ec4f3, #3636f6);">
                                <img :src="award.icon" alt="Award Icon" style="width:28px; height:28px;">
                            </div>
                        </div>
                        <div class="p-3 rounded" style="background:#222; border-left:4px solid #4462ff; width:100%;">
                            <h5 class="fw-bold mb-1" style="font-family: 'Amaranth', sans-serif;" x-text="award.title"></h5>
                            <p class="mb-1">
                                <span x-text="award.organization"></span> •
                                <small class="text-primary fw-bold" x-text="award.year"></small>
                            </p>
                            <p class="mb-0" x-text="award.description"></p>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>