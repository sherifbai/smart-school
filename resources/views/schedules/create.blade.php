@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавление группы</h1>
@stop

@section('content')
    <div class="container">
        @include('messages.messages')

        <form action="{{route('addedSchedule')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="subject">Выберите предмет</label>
                <select name="subject" class="form-select form-control" aria-label="Default select example">
                    <option selected>Выберите предмет</option>
                    @foreach($subjects as $el)
                        <option value="{{$el->id}}">{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="teacher">Выберите Учителя</label>
                <select name="teacher" class="form-select form-control" aria-label="Default select example">
                    <option selected>Выберите Учителя</option>
                    @foreach($teachers as $el)
                        <option value="{{$el->id}}">{{$el->first_name}} {{$el->last_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="group">Выберите группу</label>
                <select name="group" class="form-select form-control" aria-label="Default select example">
                    <option selected>Выберите группу</option>
                    @foreach($groups as $el)
                        <option value="{{$el->id}}">{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="room">Выберите комнату</label>
                <select name="room" class="form-select form-control" aria-label="Default select example">
                    <option selected>Выберите комнату</option>
                    @foreach($rooms as $el)
                        <option value="{{$el->id}}">{{$el->number}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="start_hour">Начало урока</label>
                <input type="text" name="start_hour" placeholder="Введите начало урока" class="form-control">
            </div>

            <div class="form-group">
                <label for="end_hour">Конец урока</label>
                <input type="text" name="end_hour" placeholder="Введите конец урока" class="form-control">
            </div>

            <div class="form-group">
                <label for="date">Дата</label>
                <input type="date" name="date" placeholder="Введите конец урока" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary" value="Добавить">
        </form>
    </div>
@stop
