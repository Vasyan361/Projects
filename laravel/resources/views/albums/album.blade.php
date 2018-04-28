@extends('layouts.master')

@section('content')

    <h1>{{ $album->title }}</h1>
    <em>{{ $album->year }}</em>

    <br>

    {!! $album->code !!}


@endsection