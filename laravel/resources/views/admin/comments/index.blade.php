@extends('admin.layouts.master')

@section('content')

    <br>

    <table class="table table-condensed">

        <tr>
            <th>Комментарий</th>
            <th></th>
        </tr>

        @foreach($comments as $comment)

            <tr>
                <td>{{ $comment->body }}</td>
                <td>
                    <a href="/admin/comments/{{ $comment->id }}">
                        <button type="button" class="btn btn-danger">Удалить</button>
                    </a>
                </td>
            </tr>

        @endforeach

    </table>

@endsection