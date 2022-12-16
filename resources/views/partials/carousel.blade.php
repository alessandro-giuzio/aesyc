<div class="carousel  relative  mx-auto" style="">
    <div class="carousel-inner  relative overflow-hidden w-full mx-auto">
      <!--Slide 1-->
      <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
      <div class="carousel-item absolute opacity-0" style="height:40vh;">
        <div class="h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center">
          <div class="flex items-center justify-center gap-12">
            @include('components.testimonialCarousel')
         </div>
        </div>
      </div>
      <!--Slide 2-->
      <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item absolute opacity-0" style="height:40vh;">
        <div class="h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center">
          <div class="flex items-center justify-center gap-12">
            @include('components.testimonialCarousel')
         </div>
        </div>
      </div>
      <!--Slide 3-->
      <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item absolute opacity-0" style="height:40vh;">
        <div class="h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center">
          <div class="flex items-center justify-center gap-12">
            @include('components.testimonialCarousel')
         </div>
        </div>
      </div>
      {{-- slide 4 --}}
      <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item absolute opacity-0 mx-auto" style="height:40vh;">
        <div class="h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center">
            <div class="flex items-center justify-center gap-12">
               @include('components.testimonialCarousel')
            </div>
         </div>
      </div>
      <!-- slide indicators -->
      <ol class="carousel-indicators border-2 border-red-500">
        <li class="inline-block mr-3">
          <label for="carousel-1">
            <div class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:bg-primary-50 active:bg-primary-50 checked:bg-primary-50  w-3 h-3 rounded-full bg-bg5"></div>
          </label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-2">
            <div class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:bg-primary-50 active:bg-primary-50 checked:bg-primary-50  w-3 h-3 rounded-full bg-bg5"></div>
          </label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-3">
            <div class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:bg-primary-50 active:bg-primary-50 checked:bg-primary-50  w-3 h-3 rounded-full bg-bg5"></div>
          </label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-4">
            <div class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:bg-primary-50 active:bg-primary-50 checked:bg-primary-50  w-3 h-3 rounded-full bg-bg5"></div>
          </label>
        </li>
      </ol>

    </div>
</div>