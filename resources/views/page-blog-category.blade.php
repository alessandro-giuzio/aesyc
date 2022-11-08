@extends('layouts.app')

@section('content')
<section>
{{-- main container --}}
  <div class="flex flex-col   pt-12 px-4 lg:px-[120px] pb-24 bg-bg1">
    {{-- heading --}}
    @include('partials.heading-legal', ['text' => 'Blog'])
    {{-- hero card --}}
    <div class="flex items-center">
      @include('sections.hero-blog-category')
    </div>
    {{-- tabs --}}
     @include('partials.tabs-blog-category')
   {{-- blog cards container --}}
   @include('partials.container-blog-category')
   @include('partials.cta-blog-category')
  </div>
</section>

@endsection