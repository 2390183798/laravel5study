@extends('main')

@section('content')
    <h1> a form dodo</h1>

    <hr/>

    {{--{!! Form::open(['url' => '/articles']) !!}--}}
    {!! Form::open(['url' => '/articles/getForm']) !!}
    @include('articles._form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

    {{--打印错误信息--}}
    {{--@if ($errors->any())--}}
        {{--<div class="alert alert-danger">--}}
            {{--@foreach($errors->all() as $error)--}}
                {{--<p>{{ $error }}</p>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--@endif--}}
    @include('errors.list')
    {{--{{ dump($errors) }}--}}
@stop