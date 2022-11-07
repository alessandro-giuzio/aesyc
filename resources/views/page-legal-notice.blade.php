@extends('layouts.app')

@section('content')
<section>
    {{-- main container --}}
    <div class="flex flex-col items-start pt-12 px-4 md:px-[120px] pb-24 gap-12 bg-bg2">
        {{-- heading --}}
        @include('partials.heading-legal', ['text' => 'Impressum'])
        {{-- content --}}
        <div class="flex items-start gap-20">
            {{-- left side --}}
            <div class="flex flex-col items-start gap-4">
                <p class="text-xl text-txPri font-bold leading-6">Verantworlich im Sinne Von § 5 Telemediengesetz (TMG)</p>
                <p class="text-base text-txPri font-normal leading-6">
                    <span class="text-primary-0">AESYC UG (haftungsbeschränkt)</span><br>

                    Sprengerstraße 99
                    66773 Schwalbach
                    <br>

                    +49 1577 4506929
                    je@aesyc.systems
                    <br>
                    Geschäftsführer: Jan-Eric Schober
                    <br>
                    Umsatzsteueridentifikationsnummer gemäß § 27 a<br>
                    Umsatzsteuergesetz: DE
                    <br>
                    Gerichtsstand: Saarlouis
                    <br>
                    Steuerliche Verhältnisse: folgt
                    <br>
                    Amtsgericht: Saarbrücken folgt
                    <br>
                    Sitz des Unternehmens: Schwalbach
                </p>
            </div>
            {{--  right content --}}
            <div class="flex flex-col gap-8">
                @include('partials.post-legal')
            </div>
        </div>
    </div>
</section>

@endsection