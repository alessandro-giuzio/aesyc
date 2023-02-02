@extends('layouts.app')

@section('content')
    <h3 class="text-purple-500 font-bold text-4xl uppercase">SIngle page post</h3>
    {{--   @while (have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile --}}
    @include('sections.hero-single-post')
    @include('partials.content-single')
    @include('sections.cta-single')
    @include('components.3CardsSection', ['heading' => 'Entdecke witere Artikel'])
@endsection
