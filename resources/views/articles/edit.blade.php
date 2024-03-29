@extends('app')

@section('content')
    <h1>Edit: {!! $article->title !!}</h1>
    <hr/>
    {{--form model binding--}}
    {!! Form::model($article, ['method' => 'PATCH','action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles.form',['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}


    @include('errors.list')
@stop