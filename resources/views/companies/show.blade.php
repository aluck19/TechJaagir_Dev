@extends('app')

@section('content')
    <h1>{{ $company->name }}</h1>
    <article>
        {{ $company->address }}
        <br/>
        {{ $company->website }}
        <br/>
        {{ $company->phone }}
        <br/>
        {{ $company->established_year }}
        <br/>
        {{ $company->employee_count }}
        <br/>
        {{ $company->bio }}
        <br/>
        {{ $company->focus_area }}
    </article>
@stop