@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>
        <article>
            {{ $article->body }}

        </article>

    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['articles.destroy', $article->id]
        ]) !!}
        {!! Form::submit('Delete this article?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

    @unless ($article->tags->isEmpty())
        <h5>
            Tags
        </h5>

        <ul>
            @foreach($article->tags as $tag)
                <li>{{ $tag-> name }}</li>
            @endforeach
        </ul>
    @endunless
@stop