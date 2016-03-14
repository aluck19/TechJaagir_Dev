@extends('app')

@section('content')
    <h1>Articles</h1>

    @foreach($companies as $company)
        <article>
            <h2>
                <a href="{{ url('/companies', $company->id)}}">{{ $company->name }}</a>
            </h2>

            <div class="body">{{ $company->address }}</div>
        </article>
    @endforeach
@stop