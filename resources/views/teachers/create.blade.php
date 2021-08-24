@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление Учителя</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('addedTeacher')}}" method="post">
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
                <label for="degree">Выберите степень</label>
                <select name="degree" class="form-select form-control" aria-label="Default select example">
                    <option selected>Выберите степень</option>
                    @foreach($degree as $deg)
                        <option value="{{$deg->id}}">{{$deg->name}}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="Добавить">
        </form>
    </div>
@stop
