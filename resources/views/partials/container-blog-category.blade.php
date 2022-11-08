<section>
    <div class="flex items-center justify-center  gap-8">
        <div class="flex flex-col  gap-24">
            {{-- 1st row --}}
            <div class="flex gap-12">
                @include('partials.blog-card', ['img' => @asset ('images/blog-category/blog-card-1.png'), 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl lacinia nunc, nec ultricies nisl nunc nec ante.'])
                @include('partials.blog-card', ['img' => @asset ('images/blog-category/blog-card.png'), 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl lacinia nunc, nec ultricies nisl nunc nec ante.'])
                @include('partials.blog-card', ['img' => @asset ('images/blog-category/blog-card-1.png'), 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl lacinia nunc, nec ultricies nisl nunc nec ante.'])
            </div>
            {{-- 2nd row --}}
            <div class="flex gap-12">
                @include('partials.blog-card', ['img' => @asset ('images/blog-category/blog-card.png'), 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl lacinia nunc, nec ultricies nisl nunc nec ante.'])
                @include('partials.blog-card', ['img' => @asset ('images/blog-category/blog-card-1.png'), 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl lacinia nunc, nec ultricies nisl nunc nec ante.'])
                @include('partials.blog-card', ['img' => @asset ('images/blog-category/blog-card.png'), 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl lacinia nunc, nec ultricies nisl nunc nec ante.'])
            </div>
            {{-- 3rd row --}}
            <div class="flex gap-12">
                @include('partials.blog-card', ['img' => @asset ('images/blog-category/blog-card-1.png'), 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl lacinia nunc, nec ultricies nisl nunc nec ante.'])
                @include('partials.blog-card', ['img' => @asset ('images/blog-category/blog-card.png'), 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl lacinia nunc, nec ultricies nisl nunc nec ante.'])
                @include('partials.blog-card', ['img' => @asset ('images/blog-category/blog-card-1.png'), 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nisl nisl lacinia nunc, nec ultricies nisl nunc nec ante.'])
            </div>
            {{-- steps --}}
            <div class="flex justify-between items-center pt-0 px-0 pb-0 gap-[190px]">
                <button class="text-base text-txPri font-normal leading-8">&larr; Zurück</button>
                <ul class="inline-flex -space-x-px">
                    <li>
                        <a href="#" aria-current="page"
                         class="text-txSec text-base font-normal leading-5 tex-center mr-6 active:text-primary-0" >1</a>
                    </li>
                    <li>
                        <a href="#"
                         class="text-txSec text-base font-normal leading-5 tex-center mr-6">2</a>
                    </li>
                    <li>
                        <a href="#"
                         class="text-txSec text-base font-normal leading-5 tex-center mr-6">3</a>
                    </li>
                    <li>
                        <a href="#"
                         class="text-txSec text-base font-normal leading-5 tex-center mr-6">_</a>
                    </li>
                    <li>
                        <a href="#"
                         class="text-txSec text-base font-normal leading-5 tex-center mr-6">8</a>
                    </li>
                    <li>
                        <a href="#"
                         class="text-txSec text-base font-normal leading-5 tex-center mr-6">9</a>
                    </li>
                    <li>
                        <a href="#"
                         class="text-txSec text-base font-normal leading-5 tex-center mr-6">10</a>
                    </li>
                </ul>
                <button class="text-base text-txPri font-normal leading-8">Vor &rarr;</button>
            </div>
        </div>
    </div>
</section>