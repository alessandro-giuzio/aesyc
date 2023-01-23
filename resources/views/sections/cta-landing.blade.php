<section id="cta-landing">
    <div class="bg-bg3 flex flex-col items-center py-16 px-2 md:px-[120px] gap-4">
        <div class="flex flex-col items-center gap-4">
            <div class="flex flex-col items-center gap-12">
                {{-- text container --}}
                <div class="flex flex-col items-center">
                    <p class="text-4xl text-txPri font-bold leading-[56px] text-center">Can’t resist the CTA</p>
                    <p class="text-2xl text-txSec font-normal leading-10 text-center max-w-2xl">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                </div>
                {{-- cta container --}}
                <div class="flex items-start gap-8">
                    @include('components.button' , ['text' => 'Let’s start to automate your business today' , 'class'=>'btn-pry'])
                </div>
            </div>
        </div>
    </div>
</section>