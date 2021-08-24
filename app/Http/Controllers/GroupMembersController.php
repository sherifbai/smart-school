<?php

namespace App\Http\Controllers;


use App\Http\Requests\GroupMembersRequest;
use App\Models\Group;
use App\Models\GroupMember;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class GroupMembersController extends Controller
{
    public function index(): Factory|View|Application
    {
        $students = GroupMember::all();

        return view('students.index', compact('students'));
    }

    public function addStudent (): Factory|View|Application
    {
        $groups = Group::query()->select(['name', 'id'])->get();

        return view('students.create', compact('groups'));
    }

    public function addedStudent(GroupMembersRequest $req): RedirectResponse
    {
        $student = new GroupMember();

        $student->first_name = $req->input('first_name');
        $student->last_name = $req->input('last_name');
        $student->group_id = $req->input('group_id');

        $student->save();

        return redirect()->route('indexStudent')->with('success', 'Студент успешно добавлен');
    }

    public function deleteStudent($id): RedirectResponse
    {
        $student = GroupMember::query()->findOrFail($id);

        $student->delete();

        return redirect()->route('indexStudent')->with('success', 'Студент успешно удален');
    }

    public function updateStudent($id): Factory|View|Application
    {
        $student = GroupMember::query()->findOrFail($id);
        $groups = Group::all();

        return view('students.update', compact('student', 'groups'));
    }

    public function updatedStudent($id, GroupMembersRequest $req): RedirectResponse
    {
        $student = GroupMember::query()->findOrFail($id);

        $student->first_name = $req->input('first_name');
        $student->last_name = $req->input('last_name');
        $student->group_id = $req->input('group_id');

        $student->save();

        return redirect()->route('indexStudent')->with('success', 'Студент успешно обнавлен');
    }
}
