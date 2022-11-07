@extends('layouts.app')

@section('content')
<section>
{{-- main container --}}
  <div class="flex flex-col pt-12 px-4 lg:px-[120px] pb-24 bg-bg1">
    {{-- heading --}}
    @include('partials.heading-legal', ['text' => 'Blog'])
    {{-- hero card --}}
    <div class="flex gap-2">
        {{-- image --}}
        <div>
            <img src="@asset('images/blog-category/blog-hero.png')" alt="">
        </div>
        {{-- card content --}}
    </div>
    {{-- blog cards --}}
  </div>
</section>

@endsection