@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление группы</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('updatedSchedule', $schedules->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="subject">Выберите предмет</label>
                <select name="subject" class="form-select form-control" aria-label="Default select example">
                    @foreach($subjects as $el)
                        <option value="{{$el->id}}" {{$el->id === $schedules->subject_id ? 'selected' : ''}}>{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="teacher">Выберите Учителя</label>
                <select name="teacher" class="form-select form-control" aria-label="Default select example">
                    @foreach($teachers as $el)
                        <option value="{{$el->id}}" {{$el->id === $schedules->teacher_id ? 'selected' : ''}}>{{$el->first_name}} {{$el->last_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="group">Выберите группу</label>
                <select name="group" class="form-select form-control" aria-label="Default select example">
                    @foreach($groups as $el)
                        <option value="{{$el->id}}" {{$el->id === $schedules->group_id ? 'selected' : ''}}>{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="room">Выберите комнату</label>
                <select name="room" class="form-select form-control" aria-label="Default select example">
                    @foreach($rooms as $el)
                        <option value="{{$el->id}}" {{$el->id === $schedules->room_id ? 'selected' : ''}}>{{$el->number}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="start_hour">Начало урока</label>
                <input type="text" name="start_hour" value="{{$schedules->start_hour}}" placeholder="Введите начало урока" class="form-control">
            </div>

            <div class="form-group">
                <label for="end_hour">Конец урока</label>
                <input type="text" name="end_hour" value="{{$schedules->end_hour}}" placeholder="Введите конец урока" class="form-control">
            </div>

            <div class="form-group">
                <label for="date">Дата</label>
                <input type="date" name="date" value="{{$schedules->date}}" placeholder="Введите конец урока" class="form-control">
            </div>

            <input type="hidden" name="_method" value="put">

            <input type="submit" class="btn btn-primary" value="Обновить">
        </form>
    </div>
@stop
