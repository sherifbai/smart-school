@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Редактирование Учителя</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('updatedTeacher', $teacher->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="first_name">Имя</label>
                <input type="text" name="first_name" value="{{$teacher->first_name}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="last_name">Фамилия</label>
                <input type="text" name="last_name" value="{{$teacher->last_name}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="degree">Выберите степень</label>
                <select name="degree" class="form-select form-control" aria-label="Default select example">
                    <option selected>{{$teacher->teacher_degree_id}}</option>
                    @foreach($degree as $deg)
                        <option value="{{$deg->id}}">{{$deg->name}}</option>
                    @endforeach
                </select>
            </div>

            <input type="hidden" name="_method" value="put">

            <input type="submit" class="btn btn-primary" value="Обновить">
        </form>
    </div>
@stop
