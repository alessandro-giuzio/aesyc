<div class="blog-card">
    <!-- Image Container -->
    <div class="max-w-sm">

    </div>
    <!-- Heading Container -->
    <div class="flex flex-col items-start p-0">
      <!-- Category & Date Container -->
      <div class="flex justify-between items-center py-2 px-0 gap-4">
        <p
          class="text-sm text-primary-50 font-bold leading-4 text-center uppercase"
        >
          Category Tag
        </p>
        <p
          class="text-sm text-txSec font-normal leading-4 text-center"
        >
          24.02.2024
        </p>
      </div>
      <p class="text-2xl text-txPri font-bold leading-10">
        Lorem dolor & consetetur
      </p>
    </div>
    <!-- Text -->
    <p
      class="text-lg text-txSec font-normal leading-8 max-w-[368px]"
    >
      {{ $text }}
    </p>
    <!-- CTA -->
    @include('components.button' , ['text' => 'Gesamten Artikel lesen'])
  </div>