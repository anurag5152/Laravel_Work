<section class="py-5" style="background-color:#50736ACC; color:white;">
    <div class="container text-center">
        <h2 class="fw-bold mb-3" style="font-family: 'Amaranth', sans-serif; text-transform:none;">
            Hobbies
        </h2>
        <hr class="mb-5 mx-auto" style="border:3px solid #4462ff; width:10%;">

        <div class="row g-4" x-data="{ hobbies: {{ Js::from($hobbies) }} }">
            <template x-for="hobby in hobbies" :key="hobby.id">
                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm h-100 p-3 text-center text-white" 
                         style="background:#1a1a1a; border-radius:16px; color:white !important;">
                        <div class="d-flex justify-content-center mb-3">
                            <div class="rounded-circle d-flex justify-content-center align-items-center"
                                 style="width:70px; height:70px; background:linear-gradient(90deg, #2ec4f3, #3636f6);">
                                <img :src="hobby.icon" alt="Hobby Icon" style="width:36px; height:36px;">
                            </div>
                        </div>
                        <h5 class="fw-bold mb-2" 
                            style="font-family:'Amaranth', sans-serif; color:white;" 
                            x-text="hobby.name">
                        </h5>
                        <p class="small mb-0" style="color:white;" x-text="hobby.description"></p>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>
