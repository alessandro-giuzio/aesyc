<section id="hero">
    <div class="flex flex-col md:flex-row items-start py-24 px-4 lg:px-[120px] gap-8 bg-bg2">
        {{-- image container --}}
        <div class="border-2 border-yellow-400">
            @if (has_post_thumbnail())
                <img src="{{ the_post_thumbnail_url() }}" alt="" class="w-full h-full object-cover">
            @endif
        </div>
        {{-- text container --}}
        <div class="flex flex-col items-start py-0 pr-0 pl-0 gap-4">
            <div class="flex flex-col items-start gap-4">
                <div class="flex flex-col items-start">
                   <p class="text-base text-txSec font-normal leading-4">CONSETETUR AMET</p>
                   {{-- post title --}}
                     <h1 class="text-4xl text-txPri font-bold leading-[64px]">{{ the_title() }}</h1>
                     {{-- the excerpt --}}
                     {{ the_excerpt() }}
                    </div>
                {{-- avatar --}}
                <div class="flex gap-4">
                  <div class="flex items-center gap-4">
                    <img src="@asset('../images/avatar.svg')" alt="" >
                    {{-- the author --}}
                    <p class="text-base text-txSec font-normal leading-4">{{ the_author() }}</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>