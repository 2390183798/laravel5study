@extends('main')

@section('content')
    <h1>Edit {!! $article->title !!}</h1>

    <hr/>

    {!! Form::open(['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
    @include('articles._form', ['submitButtonText' => 'Update Article'])
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
@stop