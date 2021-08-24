@extends('adminlte::page')

@section('title', 'Группы')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h1>Таблица типов предмет</h1>
        </div>
        <div>
            <a href="{{route('addSubjectType')}}" class="btn btn-success">Добавить</a>
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Название типа предмета</th>
                <th scope="col">Операции</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subjectTypes as $el)
                <tr>
                    <td>{{$el->name}}</td>
                    <td>
                        <a href="{{route('updateSubjectType', $el->id)}}" class="btn btn-primary">Редактировать</a>
                        <form class="d-inline-block" method="post" action="{{route('deleteSubjectType', $el->id)}}">
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

