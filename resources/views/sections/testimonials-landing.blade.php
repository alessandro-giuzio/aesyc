<section id="testimonials-landing">
    <div class="flex flex-col items-center py-24 px-4 md:px-[120px] gap-16 bg-bg3">
        {{--  heading --}}
        <div class="flex flex-col items-center py-0 px-[220px]">
         <p class="text-xl text-primary-50 font-normal leading-8 text-center">Why others love what we do</p>
         <p class="text-4xl text-txPri font-bold leading-[56px] text-center">Clients have said some very nice things about us</p>
        </div>
        {{-- carousel --}}
        {{-- <div class="flex flex-col items-center gap-8 border-2 border-red-500"> --}}

          {{-- pagination --}}
          {{-- <div class="flex items-start gap-2 border-2 border-purple-500"> --}}
            @include('components.testimonialCarousel')
            {{-- <div class="w-3 h-3 bg-primary-50 rounded-full"></div>
            <div class="w-3 h-3 bg-bg5 rounded-full"></div>
            <div class="w-3 h-3 bg-bg5 rounded-full"></div>
            <div class="w-3 h-3 bg-bg5 rounded-full"></div> --}}
         {{--  </div> --}}
        {{-- </div> --}}
    </div>
</section>