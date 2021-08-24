@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление группы</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('updatedGroup', $group->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Имя группы</label>
                <input type="text" value="{{$group->name}}" name="name" placeholder="Введите имя группы" class="form-control">
            </div>

            <div class="form-group">
                <label for="language">Выберите язык</label>
                <select name="language" class="form-select form-control" aria-label="Default select example">
                    <option selected>{{$group->language}}</option>
                    <option value="Русский">Русский</option>
                    <option value="Английский">Английский</option>
                    <option value="Узбекский">Узбекский</option>
                </select>
            </div>

            <div class="form-group">
                <label for="type">Выберите тип</label>
                <select name="type" class="form-select form-control" aria-label="Default select example">
                    <option selected>{{$group->type}}</option>
                    <option value="Очный">Очный</option>
                    <option value="Заочный">Заочный</option>
                    <option value="Ночной">Ночной</option>
                </select>
            </div>

            <input type="hidden" name="_method" value="put">

            <input type="submit" class="btn btn-primary" value="Обновить">
        </form>
    </div>
@stop
