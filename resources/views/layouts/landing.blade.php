<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>


<img src= "@asset('images/HeroImage.svg')" alt="prova" class="w-full">
{{-- add classes to @include --}}
{{-- <section class="landing">@include('sections.header',['class'=> 'landing'])</section> --}}
<main id="main" class="main landing"@include('sections.header',['class'=> 'landing'])>

    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')
