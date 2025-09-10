<section class="py-5" style="background-color: #1a1a1a; color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 vol-title">
                <h2 class="fw-bold mb-3" style="font-family: 'Amaranth', sans-serif; text-transform:none;">
                    Volunteer
                </h2>
                <hr class="mb-4 vol-border" style="border:3px solid #4462ff; width:40%;">
                <p class="mt-3">
                    Passionate about giving back to the community, I actively contribute my skills and time to meaningful causes. These experiences have strengthened my leadership, collaboration, and problem-solving abilities.
                </p>
            </div>

            <div class="col-md-8" x-data="{ volunteer: {{ Js::from($volunteer) }} }">
                <template x-for="item in volunteer" :key="item.id">
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <div class="rounded-circle d-flex justify-content-center align-items-center"
                                style="width:50px; height:50px; background:linear-gradient(90deg, #2ec4f3, #3636f6);">
                                <img :src="item.logo" alt="Logo" style="height: 28px; width:28px;">
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1 fw-bold" style="font-family: 'Amaranth', sans-serif;" x-text="item.organization"></h5>
                            <p class="mb-1" x-text="item.role"></p>
                            <small class="text-primary fw-bold" x-text="item.year"></small>
                            <p class="mt-2 mb-0" x-text="item.description"></p>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>