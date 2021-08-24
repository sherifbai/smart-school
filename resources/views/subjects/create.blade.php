@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление степени</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('addedSubject')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Название Предмета</label>
                <input type="text" name="name" placeholder="Введите имя группы" class="form-control">
            </div>
            <div class="form-group">
                <label for="alias">Короткое название Предмета</label>
                <input type="text" name="alias" placeholder="Введите имя группы" class="form-control">
            </div>

            <div class="form-group">
                <label for="subject_type_id">Выберите тип предмета</label>
                <select name="subject_type_id" class="form-select form-control" aria-label="Default select example">
                    <option selected>Выберите тип предмета</option>
                    @foreach($subjectTypes as $el)
                        <option value="{{$el->id}}">{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="Добавить">
        </form>
    </div>
@stop
