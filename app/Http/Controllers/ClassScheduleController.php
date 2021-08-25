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
use Illuminate\Support\Facades\Request;

class ClassScheduleController extends Controller
{
    public function search(): Factory|View|Application
    {
        $teachers = Teacher::all();
        $groups = Group::all();
        $rooms = Room::all();

        return view('schedules.search', compact('teachers', 'groups', 'rooms'));
    }

    public function searched(\Illuminate\Http\Request $req): Factory|View|Application
    {
        $query = ClassSchedule::query();

        if ($req->input('teacher_id') !== null) {
            $query = $query->where('teacher_id', '=', $req->input('teacher_id'));
        }

        if ($req->input('room_id') !== null) {
            $query = $query->where('room_id', '=', $req->input('room_id'));
        }

        if ($req->input('subject_id') !== null) {
            $query = $query->where('subject_id', '=', $req->input('subject_id'));
        }

        if ($req->input('date') !== null) {
            $query = $query->where('date', '=', $req->input('date'));
        }

        $schedule = $query->paginate();

        return view('schedules.searched', compact('schedule'));
    }

    public function index(): Factory|View|Application
    {
        $schedules = ClassSchedule::all();

        return view('schedules.index', compact('schedules'));
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

    public function deleteSchedule($id): RedirectResponse
    {
        $schedule = ClassSchedule::query()->findOrFail($id);

        $schedule->delete();

        return redirect()->route('indexSchedule')->with('success', 'Расписание успешно удалено');
    }

    public function updateSchedule($id): Factory|View|Application
    {
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $groups = Group::all();
        $rooms = Room::all();

        $schedules = ClassSchedule::query()->findOrFail($id);

        return view('schedules.update', compact('schedules', 'subjects', 'teachers', 'groups', 'rooms'));
    }

    public function updatedSchedule($id, ClassScheduleRequest $req): RedirectResponse
    {
        $schedule = ClassSchedule::query()->findOrFail($id);

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
