<section id="ecommerce">
    <div class="flex items-center justify-center p-0 gap-[72px]">
        {{-- text and tabs container --}}
        <div class="flex flex-col gap-8">
            {{-- text --}}
            <div class="flex flex-col  items-start gap-4">
                <div class="flex flex-col items-start">
                    <p class="text-4xl text-txPri font-bold leading-[56px] max-w-xl">Lorem <span class="text-primary-0">Ipsum Dolor</span> Sit Amet at vero es et <span class="text-primary-0">accusam justo</span></p>
                </div>
                <p class="text-xl text-txSec font-normal leading-8 max-w-xl">Accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Stet clita kasd gubergren, no sea takimata.</p>
            </div>
            {{-- tabs container --}}
          <div class="flex flex-col items-start gap-4">
            @include('components.tabs')
        </div>
    </div>
    {{-- img container --}}
    <div class="flex items-center rounded-2xl">
        <img src="@asset('../images/commerce.svg')" alt="">
    </div>
</section>