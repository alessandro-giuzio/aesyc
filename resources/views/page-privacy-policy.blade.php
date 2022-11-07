@extends('layouts.app')

@section('content')
<section>
  {{-- main container --}}
  <div class="bg-bg1 flex flex-col items-center pt-12 px-8 md:px-[120px] pb-24 gap-12">
    {{-- heading --}}
    @include('partials.heading-privacy', ['text' => 'Datenschutzerklärung'])
    {{-- post --}}
    <div class="flex flex-col gap-8 max-w-xl">
      @include('partials.post-privacy')
    </div>
</div>
</section>

@endsection
