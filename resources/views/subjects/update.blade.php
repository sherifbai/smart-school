@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление группы</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('updatedSubject', $subject->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Название Предмета</label>
                <input type="text" value="{{$subject->name}}" name="name" placeholder="Введите имя группы" class="form-control">
            </div>
            <div class="form-group">
                <label for="alias">Короткое название Предмета</label>
                <input type="text" value="{{$subject->alias}}" name="alias" placeholder="Введите имя группы" class="form-control">
            </div>

            <div class="form-group">
                <label for="subject_type_id">Выберите тип предмета</label>
                <select name="subject_type_id" class="form-select form-control" aria-label="Default select example">
                    @foreach($subjectTypes as $el)
                        <option value="{{$el->id}}" {{$el->id === $subject->subject_type_id ? 'selected' : ''}}>{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <input type="hidden" name="_method" value="put">

            <input type="submit" class="btn btn-primary" value="Обновить">
        </form>
    </div>
@stop
