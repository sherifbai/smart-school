@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление группы</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('updatedDegree', $degree->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Сепень</label>
                <input type="text" value="{{$degree->name}}" name="name" placeholder="Введите степень" class="form-control">
            </div>

            <input type="hidden" name="_method" value="put">

            <input type="submit" class="btn btn-primary" value="Обновить">
        </form>
    </div>
@stop
