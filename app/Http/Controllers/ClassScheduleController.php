<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassScheduleRequest;
use App\Models\ClassSchedule;
use App\Models\Group;
use App\Models\Room;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClassScheduleController extends Controller
{
    public function index(): Factory|View|Application
    {
        $schedule = ClassSchedule::all();

        return view('schedules.index', compact('schedule'));
    }

    public function addSchedule(): Factory|View|Application
    {
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $groups = Group::all();
        $rooms = Room::all();

        return view('schedules.create',compact('subjects','teachers', 'groups', 'rooms'));
    }

    public function addedSchedule(ClassScheduleRequest $req): RedirectResponse
    {
        $schedule = new ClassSchedule();

        $schedule->subject_id = $req->input('subject');
        $schedule->teacher_id = $req->input('teacher');
        $schedule->group_id = $req->input('group');
        $schedule->room_id = $req->input('room');
        $schedule->start_hour = $req->input('start_hour');
        $schedule->end_hour = $req->input('end_hour');
        $schedule->date = $req->input('date');

        $schedule->save();

        return redirect()->route('indexSchedule')->with('success', 'Расписание добавлено');
    }
}
