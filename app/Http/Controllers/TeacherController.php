<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use App\Models\TeacherDegree;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TeacherController extends Controller
{
    public function index(): Factory|View|Application {
        $teachers = Teacher::query()->paginate();

        return view('teachers.index', compact('teachers'));
    }

    public function addTeacher (): Factory|View|Application {
        $degree = TeacherDegree::all();
        return view('teachers.create', compact('degree'));
    }

    public function addedTeacher(TeacherRequest $req): RedirectResponse
    {
        $teacher = new Teacher();

        $teacher->first_name = $req->input('first_name');
        $teacher->last_name = $req->input('last_name');
        $teacher->teacher_degree_id = $req->input('degree');

        $teacher->save();

        return redirect()->route('indexTeacher')->with('success', 'Учитель был успешно добавлен');
    }

    public function updateTeacher ($id): Factory|View|Application {
        $teacher = Teacher::query()->findOrFail($id);
        $degree = TeacherDegree::all();

        return view('teachers.update', compact('teacher', 'degree'));
    }

    public function updatedTeacher (int $id, TeacherRequest $req): RedirectResponse
    {
        $teacher = Teacher::query()->findOrFail($id);

        $teacher->first_name = $req->input('first_name');
        $teacher->last_name = $req->input('last_name');
        $teacher->teacher_degree_id = $req->input('degree');

        $teacher->save();

        return redirect()->route('indexTeacher')->with('success', 'Учитель был успешно обнавлен');
    }

    public function deleteTeacher(int $id): RedirectResponse
    {
        $teacher = Teacher::query()->findOrFail($id);

        $teacher->delete();

        return redirect()->route('indexTeacher')->with('success', 'Учитель был успешно удален');
    }
}
