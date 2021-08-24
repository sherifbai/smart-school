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
                <th scope="col">Учитель</th>
                <th scope="col">Группа</th>
                <th scope="col">Комната</th>
            </tr>
            </thead>
            <tbody>
            @foreach($groups as $el)
                <tr>
                    <td>{{$el->name}}</td>
                    <td>{{$el->language}}</td>
                    <td>{{$el->type}}</td>
                    <td>
                        <a href="{{route('updateGroup', $el->id)}}" class="btn btn-primary">Редактировать</a>
                        <form class="d-inline-block" method="post" action="{{route('deleteGroup', $el->id)}}">
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

