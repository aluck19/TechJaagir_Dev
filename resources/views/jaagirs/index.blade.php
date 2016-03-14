@extends('app')

@section('content')
    <h1>Articles</h1>

    @foreach($jaagirs as $jaagir)
        <article>
            <h2>
                <a href="{{ url('/jaagirs', $jaagir->id)}}">{{ $jaagir->title }}</a>
            </h2>

            <div class="body">{{ $jaagir->salary }}</div>
        </article>
    @endforeach
@stop