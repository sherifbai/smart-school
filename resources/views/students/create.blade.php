@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление группы</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('addedStudent')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="first_name">Имя</label>
                <input type="text" name="first_name" placeholder="Введите имя" class="form-control">
            </div>

            <div class="form-group">
                <label for="last_name">Фамилия</label>
                <input type="text" name="last_name" placeholder="Введите фамилию" class="form-control">
            </div>

            <div class="form-group">
                <label for="type">Выберите группу</label>
                <select name="group_id" class="form-select form-control" aria-label="Default select example">
                    <option selected>Выберите группу</option>
                    @foreach($groups as $el)
                        <option value="{{$el->id}}">{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="Добавить">
        </form>
    </div>
@stop
