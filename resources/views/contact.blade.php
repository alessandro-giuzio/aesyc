@extends('layouts.app')

@section('content')
<h1 class="text-4xl text-red-600 uppercase">Titolo Contact</h1>
 {{--  @include('partials.page-header') --}}

{{--   @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif --}}

{{--   @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile --}}

  {{-- {!! get_the_posts_navigation() !!} --}}
@endsection

{{-- @section('sidebar')
  @include('sections.sidebar')
@endsection --}}
