@extends('app')


@section('content')

    @for ($i = 0; $i < count($test); $i++)

    {{ $test[$i]['Symbol']}}
    {{ $test[$i]['Symbol']}}
    {{ $test[$i]['Symbol']}}
    {{ $test[$i]['Symbol']}}
    {{ $test[$i]['Name']}}
    @endfor

@stop