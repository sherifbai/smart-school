@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Фильтр</h1>
@stop

@section('content')
    <div class="container">
        @include('messages.messages')

        <form action="{{route('searched')}}" method="get">
            @csrf

            <div class="form-group">
                <label for="teacher_id">Выберите Учителя</label>
                <select name="teacher_id" class="form-select form-control" aria-label="Default select example">
                    <option value="" selected>Выберите Учителя</option>
                    @foreach($teachers as $el)
                        <option value="{{$el->id}}">{{$el->first_name}} {{$el->last_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="group_id">Выберите группу</label>
                <select name="group_id" class="form-select form-control" aria-label="Default select example">
                    <option value="" selected>Выберите группу</option>
                    @foreach($groups as $el)
                        <option value="{{$el->id}}">{{$el->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="room_id">Выберите комнату</label>
                <select name="room_id" class="form-select form-control" aria-label="Default select example">
                    <option value="" selected>Выберите комнату</option>
                    @foreach($rooms as $el)
                        <option value="{{$el->id}}">{{$el->number}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date">Дата</label>
                <input type="date" name="date" placeholder="Введите конец урока" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary" value="Отфильтровать">
        </form>
    </div>
@stop
