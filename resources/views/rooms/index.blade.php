@extends('adminlte::page')

@section('title', 'Группы')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h1>Таблица Комнат</h1>
        </div>
        <div>
            <a href="{{route('addRoom')}}" class="btn btn-success">Добавить</a>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Номер</th>
                <th scope="col">Этаж</th>
                <th scope="col">Тип комнаты</th>
                <th scope="col">Операции</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rooms as $el)
                <tr>
                    <td>{{$el->number}}</td>
                    <td>{{$el->stage}}</td>
                    <td>{{$el->typeOfRoom->name}}</td>
                    <td>
                        <a href="{{route('updateRoom', $el->id)}}" class="btn btn-primary">Редактировать</a>
                        <form class="d-inline-block" method="post" action="{{route('deleteRoom', $el->id)}}">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop

