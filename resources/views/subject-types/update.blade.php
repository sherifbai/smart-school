@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление типов предмет</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('updatedSubjectType', $subjectType->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Тип предмета</label>
                <input type="text" value="{{$subjectType->name}}" name="name" placeholder="Введите тип предмета" class="form-control">
            </div>

            <input type="hidden" name="_method" value="put">

            <input type="submit" class="btn btn-primary" value="Обновить">
        </form>
    </div>
@stop
