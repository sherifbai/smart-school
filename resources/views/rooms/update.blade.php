@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление группы</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('updatedRoom', $room->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="number">Номер</label>
                <input type="text" value="{{$room->number}}" name="number" placeholder="Введите номер" class="form-control">
            </div>

            <div class="form-group">
                <label for="stage">Этаж</label>
                <input type="text" value="{{$room->stage}}" name="stage" placeholder="Введите этаж" class="form-control">
            </div>

            <div class="form-group">
                <label for="type">Выберите группу</label>
                <select name="type_of_room_id" class="form-select form-control" aria-label="Default select example">
                    @foreach($typeOfRoom as $el)
                        <option value="{{$el->id}}" {{$el->id === $room->type_of_room_id ? 'selected' : ''}}>{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <input type="hidden" name="_method" value="put">

            <input type="submit" class="btn btn-primary" value="Обновить">
        </form>
    </div>
@stop
