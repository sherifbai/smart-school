@extends('adminlte::page')

@section('title', 'Таблица учителей')

@section('content_header')
   <div class="d-flex justify-content-between">
       <div>
           <h1>Таблица учителей</h1>
       </div>
       <div>
           <a href="{{route('addTeacher')}}" class="btn btn-success">Добавить</a>
       </div>
   </div>
@stop

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Степень</th>
                <th scope="col">Действии</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teachers as $el)
                <tr>
                    <td>{{$el->first_name}}</td>
                    <td>{{$el->last_name}}</td>
                    <td>{{$el->teacherDegree->name}}</td>
                    <td>
                        <a href="{{route('updateTeacher', $el->id)}}" class="btn btn-primary">Редактировать</a>
                        <form class="d-inline-block" method="post" action="{{route('deleteTeacher', $el->id)}}">
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

