<section id="tech">
    <div class="bg-bg3 flex flex-col items-center py-24 px-4 md:px-[120px] gap-[144px]">
        {{-- heading --}}
        <div class="flex flex-col items-center py-0 px-[220px]">
            <h4 class="text-4xl text-txPri font-normal leading-[56px] text-center max-w-2xl">Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod
            </h4>
        </div>
        {{-- testimonials cards container --}}
        <div class="flex items-center p-0 gap-4">
            @include('components.testimonialCard', ['title' => 'First Card', 'body'=>'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'img' => '../public/images/testimonial.svg', 'class' => 'hover:bg-bg2 duration-150'])
            @include('components.testimonialCard', ['title' => 'Second Card', 'body'=>'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'img' => '../public/images/testimonial-1.svg', 'class' => 'hover:bg-bg2 duration-150'])
            @include('components.testimonialCard', ['title' => 'Third Card', 'body'=>'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'img' => '../public/images/testimonial-2.svg', 'class' => 'hover:bg-bg2 duration-150'])
            @include('components.testimonialCard', ['title' => 'Fourth Card', 'body'=>'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'img' => '../public/images/testimonial-3.svg', 'class' => 'hover:bg-bg2 duration-150'])
        </div>
    </div>
</section>