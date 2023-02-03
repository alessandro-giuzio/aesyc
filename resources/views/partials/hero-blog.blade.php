<div class="flex items-center relative flex-col lg:flex-row  gap-4 lg:gap-12 mt-4">
    <div class="img-box">
        <img src="@asset('/images/blog/blog-hero.png')" alt="">
    </div>
    <div class="flex flex-col gap-4 z-heroHeading">
        <!-- Heading Container -->
        <div class="flex flex-col  p-0">
            <!-- Category & Date Container -->
            <div class="flex justify-between items-center py-2 px-0">
                <p class="text-sm text-primary-50 font-bold leading-4 text-center uppercase">

                    {{-- show category post --}}
                    category
                    @php(the_category())
                </p>

                <time class="updated text-sm text-txSec font-normal leading-4 text-center"
                    datetime="{{ get_post_time('c', true) }}">
                    {{ get_the_date() }}
                </time>

            </div>
            <p class="text-2xl text-txPri font-bold leading-10">
                Featured Blog Post
            </p>
        </div>
        <!-- Text -->
        <p class="text-lg text-txSec font-normal leading-8 max-w-[368px]">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente hic eius beatae, inventore enim cumque
            ipsa quas! Dolorem doloribus quis, distinctio dolor quidem explicabo cum.
        </p>

        <!-- CTA -->
        <div>@include('components.button', ['text' => 'Gesamten Artikel lesen', 'class' => 'btn-pry'])</div>
    </div>
</div>
