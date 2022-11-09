@extends('layouts.app')

@section('content')

{{-- main container --}}
  <div class="flex flex-col items-start gap-8   pt-12 px-4 lg:px-[120px] pb-24 bg-bg1">
    {{-- heading --}}
    @include('partials.heading-legal', ['text' => 'Blog'])
    {{-- hero card --}}
    <div class="flex items-center">
      @include('sections.hero-blog')
    </div>
    {{-- tabs --}}
     @include('partials.tabs-blog-category')
   {{-- blog cards container --}}
   @include('partials.container-blog-category')
  </div>
  @include('partials.cta-blog-category')


@endsection