<section class="py-5" style="background-color: #1b263b;">
  <div class="container text-white" x-data="{ references: @js($references) }">

    <h2 class="fw-bold mb-5 text-center" style="font-family: 'Magra', sans-serif; color:#00e0ff;">
      REFERENCES
    </h2>

    <ul class="list-group list-group-flush">
      <template x-for="(ref, index) in references" :key="index">
        <li class="list-group-item bg-dark text-white mb-3 rounded shadow-sm">
          <h5 class="fw-bold mb-1" x-text="ref.name"></h5>
          <p class="mb-1"><strong>Position:</strong> <span x-text="ref.position"></span></p>
          <p class="mb-1"><strong>Company:</strong> <span x-text="ref.company"></span></p>
          <p class="mb-0"><strong>Email:</strong> <a :href="'mailto:' + ref.email" class="text-info" x-text="ref.email"></a></p>
        </li>
      </template>
    </ul>

  </div>
</section>
