@extends('layouts.app')

@section('content')
{{-- main container --}}
<div class="flex flex-col items-start gap-8   pt-12 px-4 lg:px-[120px] pb-24 bg-bg1">
  {{-- heading --}}
  @include('partials.heading' , ['text' => 'Blog'])
  {{-- hero card --}}
  <div class="flex items-center">

    @include('partials.hero-blog')
  </div>
  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
</div>
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
