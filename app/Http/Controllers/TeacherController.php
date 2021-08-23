<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function add_teacher (TeacherRequest $req) {
        $teacher = new Teacher();

        $teacher->first_name = $req->input('first_name');
        $teacher->last_name = $req->input('last_name');

        $teacher->save();

        return redirect()->route('home')->with('success', 'Учитель был успешно добавлен');
    }

    public function update_teacher ($id, TeacherRequest $req) {
        $teacher = Teacher::query()->findOrFail($id);

        $teacher->first_name = $req->input('first_name');
        $teacher->last_name = $req->input('last_name');

        $teacher->save();

        return redirect()->route('home')->with('success', 'Учитель был успешно обнавлен');
    }

    public function delete_teacher ($id) {
        $teacher = Teacher::query()->findOrFail($id);

        $teacher->delete();

        return redirect()->route('home')->with('success', 'Учитель был успешно удален');
    }
}
