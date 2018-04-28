@extends('admin.layouts.master')

@section('content')

    <br>

    <a href="/admin/photos/create">
        <button type="button" class="btn btn-primary">Добавить изображение</button>
    </a>

    <div class="row">

        @foreach($photo as $one)

            <div class="col-md-3">

                <img class="img-thumbnail img-responsive" src="{{ $one->url }}">

                <a href="/admin/photos/{{ $one->id }}">
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </a>

            </div>

        @endforeach

    </div>

@endsection