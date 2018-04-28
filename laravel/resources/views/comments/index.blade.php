@extends('layouts.master')

@section('content')

    <br>

    <ul>

        @foreach($comments as $comment)

            <li>{{ $comment->body }}</li>

        @endforeach

    </ul>

    <div class="row">

        <div class="col-md-5">

            <form role="form" method="post" action="/comments">

                {{ csrf_field() }}

                <div class="form-group">

                    <label for="body">Оставить комментарий</label>
                    <textarea class="form-control" id="body" name="body" rows="3"></textarea>

                </div>

                <button type="submit" class="btn btn-primary">Отправить</button>

            </form>

            <br>

            @include('layouts.errors')

        </div>

    </div>

@endsection