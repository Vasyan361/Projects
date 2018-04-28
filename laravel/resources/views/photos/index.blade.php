@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach($photo as $one)

            <div class="col-md-3">

                <a href="{{ '/photos/' . $one->id }}">
                    <img class="img-thumbnail img-responsive" src="{{ $one->url }}">
                </a>

            </div>

        @endforeach

    </div>

@endsection