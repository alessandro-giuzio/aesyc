<section id="cta" class="bg-bg2">
    <div class="flex flex-col justify-center items-center py-0 px-[120px] gap-[10px]">
      <div class="flex flex-col py-0 gap-[10px] items-start  bg-bg2 ">
          <div class="flex flex-row gap-8 items-center p-16">
            {{-- heading &  support text --}}
            <div class="flex flex-col gap-8">
              <p class="text-4xl text-txPri font-bold leading-[56px]">Lorem ipsum dolor sit</p>
              <p class="text-xl text-txPri font-normal leading-8">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
            </div>
            {{-- cta --}}
            <div class="flex items-start gap-2">@include('components.button', ['text' => 'Lorem ipsum'])</div>
          </div>
      </div>
    </div>
</section>