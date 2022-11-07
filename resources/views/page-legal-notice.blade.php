@extends('layouts.app')

@section('content')
<section>
    {{-- main container --}}
    <div class="flex flex-col items-start pt-12 px-4 md:px-[120px] pb-24 gap-12 bg-bg2">
        {{-- heading --}}
        @include('partials.heading-legal', ['text' => 'Impressum'])
        {{-- content --}}
        <div class="flex items-start gap-16">
            {{-- left side --}}
            {{--  right content --}}
        </div>
    </div>
</section>

@endsection