<section class="py-5" style="background-color: #1b263b;">
  <div class="container">
    <div class="row align-items-center">

      <div class="text-white" 
           x-data="{ 
             subtitle: @js($subtitle), 
             description: @js($description) 
           }">

        <h2 class="fw-bold mb-3 text-center" style="font-family: 'Magra', sans-serif;">
          <span style="color:#00e0ff;">About</span> Me
        </h2>

        <h5 class="fw-semibold mb-3 text-center" x-text="subtitle"></h5>

        <p class="lh-lg text-center" x-text="description"></p>
      </div>
    </div>
  </div>
</section>
