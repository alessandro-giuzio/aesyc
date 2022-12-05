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
            <div class="flex flex-col items-center gap-4">
                <div class="w-full mx-auto mt-4  rounded border-2 border-red-500">
                    <!-- Tabs -->
                    <ul id="tabs" class="flex align-baseline w-full px-1 pt-2 ">

                      <li class="px-4 py-2 -mb-px font-normal text-txSec text-lg border-b-2 border-primary-50  opacity-50"><a id="default-tab" href="#first">Our Mission</a>
                    </li>
                      <li class="px-4 py-2 font-normal text-txSec text-lg  opacity-50"><a href="#second">Our Vision</a>
                    </li>
                      <li class="px-4 py-2 font-normal text-txSec text-lg  opacity-50"><a href="#third">Our Value</a>
                    </li>
                    </ul>

                    <!-- Tab Contents -->
                    <div id="tab-contents">
                      <div id="first" class="py-4 px-6 bg-bg2">
                        <p class="text-lg text-txSec font-normal leading-8 max-w-md">Accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                      </div>
                      <div id="second" class="hidden py-4 px-6 bg-bg2">
                        <p class="text-lg text-txSec font-normal leading-8 max-w-md">Accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                      </div>
                      <div id="third" class="hidden py-4 px-6 bg-bg2">
                        <p class="text-lg text-txSec font-normal leading-8 max-w-md">Accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                      </div>
                    </div>
                  </div>
        </div>
    </div>
    {{-- img container --}}
    <div class="flex items-center rounded-2xl">
        <img src="@asset('../images/commerce.svg')" alt="">
    </div>
</section>