<?php

namespace App\Http\Controllers;


use App\Http\Requests\SubjectTypeRequest;
use App\Models\SubjectType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SubjectTypeController extends Controller
{
    public function index(): Factory|View|Application
    {
        $subjectTypes = SubjectType::all();

        return view('subject-types.index', compact('subjectTypes'));
    }

    public function addSubjectType(): Factory|View|Application
    {
        return view('subject-types.create');
    }

    public function addedSubjectType(SubjectTypeRequest $req): RedirectResponse
    {
        $subjectType = new SubjectType();

        $subjectType->name = $req->input('name');

        $subjectType->save();

        return redirect()->route('indexSubjectType')->with('success', 'Тип предмета успешно добавлен');
    }

    public function deleteSubjectType($id): RedirectResponse
    {
        $subjectType = SubjectType::query()->findOrFail($id);

        $subjectType->delete();

        return redirect()->route('indexSubjectType')->with('success', 'Тип предмета успешно удален');
    }

    public function updateSubjectType($id): Factory|View|Application
    {
        $subjectType = SubjectType::query()->findOrFail($id);

        return view('subject-types.update', compact('subjectType'));
    }

    public function updatedSubjectType($id, SubjectTypeRequest $req): RedirectResponse
    {
        $subjectType = SubjectType::query()->findOrFail($id);

        $subjectType->name = $req->input('name');

        $subjectType->save();

        return redirect()->route('indexSubjectType')->with('success', 'Тип предмета успешно обнавлен');
    }
}
