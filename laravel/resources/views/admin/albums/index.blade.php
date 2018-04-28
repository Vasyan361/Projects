@extends('admin.layouts.master')

@section('content')

    <br>

    <a href="/admin/albums/create">
        <button type="button" class="btn btn-primary">Создать новый альбом</button>
    </a>


    <br>
    <br>

    <table class="table table-condensed">

        <tr>
            <th>Название альбома</th>
            <th>Год выхода</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($albums as $album)

            <tr>
                <td>{{ $album->title }}</td>
                <td>{{ $album->year }}</td>
                <td>
                    <a href="/admin/albums/{{ $album->id }}/edit">
                        <button type="submit" class="btn btn-primary">Редактировать</button>
                    </a>
                </td>
                <td>
                    <form method="post" action="/admin/albums/{{ $album->id }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>

        @endforeach
    </table>

@endsection