@extends('admin.layouts.master')

@section('content')

    @if(isset($album))
        <h1>{{ 'Редактирование альбома' }}</h1>
    @else
        <h1>{{ 'Создать новый альбом' }}</h1>
    @endif

    <div class="row">

        <div class="col-md-7">

            <form role="form" method="post" action="
        @if(isset($album))
            {{ '/admin/albums/' . $album->id }}
            @else
            {{ '/admin/albums' }}
            @endif">

                {{ csrf_field() }}

                @if(isset($album))
                    {{ method_field('PUT') }}
                @endif

                <div class="form-group">
                    <label for="title">Название альбома</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Введите название альбома" value="
            @if(isset($album))
                    {{ $album->title }}
                    @endif">
                </div>

                <div class="form-group">
                    <label for="year">Год выхода</label>
                    <input type="year" name="year" class="form-control" id="year" placeholder="Введите год выхода" value="
            @if(isset($album))
                    {{ $album->year }}
                    @endif">
                </div>

                <div class="form-group">
                    <label for="code">Ссылка на Яндекс музыку(без заголовка)</label>
                    <textarea name="code" id="code" class="form-control" rows="5">
                @if(isset($album))
                            {{ $album->code }}
                        @endif</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Опубликовать</button>

            </form>

            <br>

            @include('layouts.errors')

        </div>
    </div>

@endsection