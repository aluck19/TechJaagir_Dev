@extends('app')

@section('content')
    <h1>{{ $jaagir->title }}</h1>
    <article>
        {{ $jaagir->employer_id }}
        <br/>
        {{ $jaagir->total_openings }}
        <br/>
        {{ $jaagir->salary }}
        <br/>
        {{ $jaagir->experience }}
        <br/>
        {{ $jaagir->category }}
        <br/>
        {{ $jaagir->position }}
        <br/>
        {{ $jaagir->type }}
        <br/>
        {{ $jaagir->education }}
        <br/>
        {{ $jaagir->location }}
        <br/>
        {{ $jaagir->description }}
        <br/>
        {{ $jaagir->specification }}
        <br/>
        {{ $jaagir->published_at }}
        <br/>
        {{ $jaagir->expiry_at }}
        <br/>
        {{ $jaagir->apply_description }}
        <br/>
        {{ $jaagir->apply_email }}
        <br/>
        {{ $jaagir->apply_website }}

    </article>
@stop