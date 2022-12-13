<section id="hero-landing">
<div class="flex flex-col items-center justify-center pt-24 px-4 md:px-[120px] pb-12  hero-pattern">
    <div class="flex items-center justify-center gap-[72px]">
        <div class="flex flex-col items-start gap-12">
            {{-- text container --}}
            <div class="flex flex-col items-start max-w-xl">
                <p class="text-4xl text-txPri font-bold leading-[64px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>
                <p class="text-2xl text-txSec font-normal leading-10">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
            </div>
            {{-- cta container --}}
            <div class="flex items-start gap-2">
                @include('components.button' , ['text' => 'Primary CTA' , 'class'=>'btn-pry'])
                @include('components.button' , ['text' => 'Secondary CTA' , 'class'=>'btn-sec'])
            </div>
            {{-- text & logo  --}}
            <div class="flex flex-col items-start gap-2">
                <p class="text-xs text-txSec font-medium leading-6 text-center">Brands love to work with us</p>
                {{-- logos --}}
                <div class="flex items-center gap-8">
                    <img src="@asset('../images/logo-partner.svg')" alt="">
                    <img src="@asset('../images/logo-partner-1.svg')" alt="">
                </div>
            </div>
        </div>
        {{-- town image container --}}
            <div>
                <img src="@asset('../images/town.svg')" alt="" class="">
            </div>
        </div>
</div>
</section>