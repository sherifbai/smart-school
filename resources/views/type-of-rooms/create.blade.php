@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление типа комнаты</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('addedTypeOfRoom')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Название типа</label>
                <input type="text" name="name" placeholder="Введите типа комнаты" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary" value="Добавить">
        </form>
    </div>
@stop
