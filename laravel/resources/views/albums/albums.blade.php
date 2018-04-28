@extends('layouts.master')

@section('content')
    <ul>

        @foreach($albums as $album)

            <li>

                <h1>
                    <a href="/albums/{{ $album->id }}">
                        {{ $album->title }}
                    </a>
                </h1>

                <em>{{ $album->year }}</em>

            </li>

        @endforeach

    </ul>
@endsection