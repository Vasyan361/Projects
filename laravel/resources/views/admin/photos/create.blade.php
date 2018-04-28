@extends('admin.layouts.master')

@section('content')

    <br>

    <form method="post" action="/admin/photos" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="image">
                <h1>Загрузить Новое изображение:</h1>
            </label>
            <input type="file" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>

    </form>

@endsection