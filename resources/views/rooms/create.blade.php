@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление комнаты</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('addedRoom')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="number">Номер</label>
                <input type="text" name="number" placeholder="Введите номер" class="form-control">
            </div>

            <div class="form-group">
                <label for="stage">Этаж</label>
                <input type="text" name="stage" placeholder="Введите этаж" class="form-control">
            </div>

            <div class="form-group">
                <label for="type">Выберите тип</label>
                <select name="type_of_room_id" class="form-select form-control" aria-label="Default select example">
                    <option selected>Выберите тип</option>
                    @foreach($typeOfRooms as $el)
                        <option value="{{$el->id}}">{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="Добавить">
        </form>
    </div>
@stop
