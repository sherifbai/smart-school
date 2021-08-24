<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherDegreeRequest;
use App\Models\TeacherDegree;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class TeacherDegreeController extends Controller
{
    public function index(): Factory|View|Application
    {
        $degree = TeacherDegree::all();

        return view('degrees.index', compact('degree'));
    }

    public function addDegree(): Factory|View|Application
    {
        return view('degrees.create');
    }

    public function addedDegree(TeacherDegreeRequest $req): Redirector|RedirectResponse|Application
    {
        $degree = new TeacherDegree();

        $degree->name = $req->input('name');

        $degree->save();

        return redirect()->route('indexDegree')->with('success', 'Степень был успешно добавлен');
    }

    public function deleteDegree($id): RedirectResponse
    {
        $degree = TeacherDegree::query()->findOrFail($id);

        $degree->delete();

        return redirect()->route('indexDegree')->with('success', 'Степень был успешно удален');
    }

    public function updateDegree($id): Factory|View|Application
    {
        $degree = TeacherDegree::query()->findOrFail($id);

        return view('degrees.update', compact('degree'));
    }

    public function updatedDegree($id, TeacherDegreeRequest $req)
    {
        $degree = TeacherDegree::query()->findOrFail($id);

        $degree->name = $req->input('name');

        $degree->save();

        return redirect()->route('indexDegree')->with('success', 'Степень был успешно обновлен');
    }
}
