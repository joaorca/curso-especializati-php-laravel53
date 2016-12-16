@extends('site.templates.template1')

@section('content')

    <h1>Home Page do Site!</h1>
    {{$xss}}

    @if($var1 == '1234')
        <p>É igual</p>
    @else
        <p>É diferente</p>
    @endif

    @unless($var1 == '1234')
        <p>Não é igual... unless</p>
    @endunless

    @for( $i = 0; $i < 10; $i++ )
        <p>FOR i: {{$i}}</p>
    @endfor

    @foreach($arrayData as $array)
        <p>FOREACH: {{$array}}</p>
    @endforeach

    {{--
    @if( count($arrayData2) > 0 )
        @foreach($arrayData2 as $array)
            <p>FOREACH: {{$array}}</p>
        @endforeach
    @else
        <p>Array vazio</p>
    @endif
    --}}

    @forelse($arrayData2 as $array)
        <p>FOREACH: {{$array}}</p>
    @empty
        <p>Array vazio forelse</p>
    @endforelse

    @php
        echo "PHP";
    @endphp

    @include('site.includes.sidebar',compact('var1'))

@endsection