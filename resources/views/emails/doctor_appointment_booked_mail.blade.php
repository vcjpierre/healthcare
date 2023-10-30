@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{ asset(getAppLogo()) }}" class="logo" alt="{{ getAppName() }}">
        @endcomponent
    @endslot

    {{-- Body --}}
    <div>
        <h2>Hola, <b>{{ $name }}</b></h2>
        <p><b>{{ $patientName }}</b>  reservó una cita con el servicio <b>{{$service}}</b>.</p>
        <p><b>Hora de la cita: </b>{{ $date }} - {{ $time }}</p>
        <p>Gracias y saludos cordiales,</p>
        <p>{{ getAppName() }}</p>
    </div>

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <h6>© {{ date('Y') }} {{ getAppName() }}.</h6>
        @endcomponent
    @endslot
@endcomponent
