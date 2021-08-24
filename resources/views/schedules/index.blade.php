@extends('adminlte::page')

@section('title', 'Группы')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h1>Таблица групп</h1>
        </div>
        <div>
            <a href="{{route('addSchedule')}}" class="btn btn-success">Добавить</a>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Предмет</th>
                <th scope="col">Начало</th>
                <th scope="col">Конец</th>
                <th scope="col">Дата</th>
                <th scope="col">Учитель</th>
                <th scope="col">Группа</th>
                <th scope="col">Комната</th>
                <th scope="col">Операции</th>
            </tr>
            </thead>
            <tbody>
            @foreach($schedules as $el)
                <tr>
                    <td>{{$el->subject->name}}</td>
                    <td>{{$el->start_hour}}</td>
                    <td>{{$el->end_hour}}</td>
                    <td>{{$el->date}}</td>
                    <td>{{$el->teacher->first_name}} {{$el->teacher->last_name}}</td>
                    <td>{{$el->group->name}}</td>
                    <td>{{$el->room->number}}</td>
                    <td>
                        <a href="#" class="btn btn-primary">Редактировать</a>
                        <form class="d-inline-block" method="post" action="{{route('deleteSchedule', $el->id)}}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop

