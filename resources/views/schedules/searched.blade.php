@extends('adminlte::page')

@section('title', 'Группы')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h1>Таблица групп</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Учитель</th>
                <th scope="col">Группа</th>
                <th scope="col">Комната</th>
                <th scope="col">Дата</th>
            </tr>
            </thead>
            <tbody>
            @foreach($schedule as $el)
                <tr>
                    <td>{{$el->teacher->first_name}} {{$el->teacher->last_name}}</td>
                    <td>{{$el->group->name}}</td>
                    <td>{{$el->room->number}}</td>
                    <td>{{$el->date}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop

