<a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>
{{-- <div>
  <img src="@asset('../images/heroRed.svg')" alt="" class="absolute b-0 left-[34.83%] top-[30.38%]">
  <img src="@asset('../images/heroStripes.svg')" alt="" class="absolute left-0 right-0 -top-[0.27%] bottom-[0.27%] w-full">
  <div class="absolute top-0 right-0 bottom-0 left-0"></div>
</div> --}}

  @include('sections.header')
  <main id="main" class="main bg-bg1">
      @yield('content')
    </main>

    @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
    @endif

    @include('sections.footer')