@extends('main2')

@section('content')
    @if ($data["first"] == 'John')
        <h1>Hi, John</h1>
    @else
        <h1>Else</h1>
    @endif

    @if (count($data))
        <h3>Data Like:</h3>
        <ul>
            @foreach ($data as $sth)
                <li>{{ $sth }}</li>
            @endforeach
        </ul>
    @endif

@section('footer')
    <h1>this is footer</h1>
@stop