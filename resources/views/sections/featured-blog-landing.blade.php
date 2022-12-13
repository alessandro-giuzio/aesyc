<section id="featured-blog">
    <div class="flex flex-col justify-center items-center mx-auto">
        <div class="pt-12 px-4 md:px-[120px] pb-24 gap-8">
            <div class="flex items-center w-full justify-between">
                @include('partials.heading' , ['text' => 'Entdecke unseren Blog'])
                <div class="flex flex-col items-center justify-center gap-3">
                    <a href="/blog" class="text-base text-primary-0 font-normal leading-6">Alle Beiträge ansehen →</a>
                </div>
            </div>
            {{-- hero card --}}
            <div class="flex items-center">
            @include('partials.hero-blog')
            </div>
        </div>
    </div>
</section>