@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @php
            $styleCss = 'style';
        @endphp
        @component('mail::header', ['url' => config('app.url')])
            <h1 {{ $styleCss }}="display: inline-block">{{ $appName }}</h1>
        @endcomponent
    @endslot

    {{-- Body --}}
    <div>
        <p>Hola, <b>{{ $name }}</b></p>
        <p>Su mensaje de consulta ha sido recibido correctamente.</p>
    </div>

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <h6>© {{ date('Y') }} {{ config('app.name') }}.</h6> 
        @endcomponent
    @endslot
@endcomponent
