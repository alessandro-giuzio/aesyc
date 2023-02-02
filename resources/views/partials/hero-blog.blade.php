<div class="flex items-center relative flex-col lg:flex-row  gap-4 lg:gap-12 mt-4">
    <div class="img-box">
        <img src="@asset('/images/blog/blog-hero.png')" alt="">
    </div>
    <div class="flex flex-col gap-4 z-heroHeading">
        <!-- Heading Container -->
        <div class="flex flex-col items-start p-0">
            <!-- Category & Date Container -->
            <div class="flex justify-between items-center py-2 px-0 gap-52">
                <p class="text-sm text-primary-50 font-bold leading-4 text-center uppercase">
                    Category Tag
                </p>
                <p class="text-sm text-txSec font-normal leading-4 text-center">
                    24.02.2024
                </p>
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
