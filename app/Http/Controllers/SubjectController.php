<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use App\Models\SubjectType;
use Doctrine\DBAL\Query\QueryException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use mysql_xdevapi\Exception;
use Throwable;

class SubjectController extends Controller
{
    public function index(): Factory|View|Application
    {
        $subjects = Subject::all();

        return view('subjects.index', compact('subjects'));
    }

    public function addSubject(): Factory|View|Application
    {
        $subjectTypes = SubjectType::all();

        return view('subjects.create', compact('subjectTypes'));
    }

    public function addedSubject(SubjectRequest $req): RedirectResponse
    {
        $subject = new Subject();

        $subject->name = $req->input('name');
        $subject->alias = $req->input('alias');
        $subject->subject_type_id = $req->input('subject_type_id');

        $subject->save();

        return redirect()->route('indexSubject')->with('success', 'Предмет успешно добавлен');
    }

    public function deleteSubject($id): RedirectResponse
    {
        $subject = Subject::query()->findOrFail($id);

        try {
            $subject->delete();
        } catch (Throwable $e) {
            return redirect()->route('indexSubject')->with('error', 'Предмет нельз удалить');
        }

        return redirect()->route('indexSubject')->with('success', 'Предмет успешно удален');
    }

    public function updateSubject($id): Factory|View|Application
    {
        $subject = Subject::query()->findOrFail($id);

        $subjectTypes = SubjectType::all();

        return view('subjects.update', compact('subject', 'subjectTypes'));
    }

    public function updatedSubject($id, SubjectRequest $req): RedirectResponse
    {
        $subject = Subject::query()->findOrFail($id);

        $subject->name = $req->input('name');
        $subject->alias = $req->input('alias');
        $subject->subject_type_id = $req->input('subject_type_id');

        $subject->save();

        return redirect()->route('indexSubject')->with('success', 'Предмет успешно обнавлен');
    }
}
