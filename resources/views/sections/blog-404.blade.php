<section id="features">
    <div class="bg-bg1 flex flex-col items-center justify-center pt-0 px-4 lg:px-[120px] pb-24 gap-8">
        {{-- heading --}}
        <div class="flex flex-col items-start">
            <p class="text-3xl text-txPri font-bold leading-10">Entdecke unseren Blog</p>
        </div>
        {{-- card container --}}
        <div class="flex flex-col md:flex-row gap-12">
            @include('partials.blog-card', ['text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'], ['img' => @asset ('images/blog-category/blog-card-1.png')])
            @include('partials.blog-card', ['text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'], ['img' => @asset ('images/blog-category/blog-card.png')])
            @include('partials.blog-card', ['text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'], ['img' => @asset ('images/blog-category/blog-card-1.png')])
        </div>
    </div>
</section>