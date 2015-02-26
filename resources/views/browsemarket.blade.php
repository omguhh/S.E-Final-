@extends('app')
@extends('/Elements/topbar')

<h1>Browse Market Page</h1>

@for ($i = 0; $i < count($test); $i++)

    {{'Symbol ' . $test[$i]['Symbol']}}
    <br>
    {{'Open ' . $test[$i]['Open']}}
    <br>

@endfor

