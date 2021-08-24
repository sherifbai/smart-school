@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление степени</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('addedDegree')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Название степени</label>
                <input type="text" name="name" placeholder="Введите имя группы" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary" value="Добавить">
        </form>
    </div>
@stop
