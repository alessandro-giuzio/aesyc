@extends('layouts.app')
@section('content')
@include('sections.hero-404')
@include('sections.blog-404')
  @endsection

{{-- @section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif
@endsection
 --}}