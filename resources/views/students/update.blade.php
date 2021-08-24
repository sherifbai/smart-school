@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Редактирование Ученика</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('updateStudent', $student->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="first_name">Имя</label>
                <input type="text" name="first_name" value="{{$student->first_name}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="last_name">Фамилия</label>
                <input type="text" name="last_name" value="{{$student->last_name}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="type">Выберите группу</label>
                <select name="group_id" class="form-select form-control" aria-label="Default select example">
                    @foreach($groups as $el)
                        <option value="{{$el->id}}" {{$el->id === $student->group_id ? 'selected' : ''}}>{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <input type="hidden" name="_method" value="put">

            <input type="submit" class="btn btn-primary" value="Обновить">
        </form>
    </div>
@stop
