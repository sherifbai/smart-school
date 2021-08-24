<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class GroupController extends Controller
{
    public function index (): Factory|View|Application
    {
        $groups = Group::query()->paginate();

        return view('groups.index', compact('groups'));
    }

    public function addGroup (): Factory|View|Application
    {
        return view('groups.create');
    }

    public function addedGroup (GroupRequest $req): RedirectResponse
    {
        $group = new Group();

        $group->name = $req->input('name');
        $group->language = $req->input('language');
        $group->type = $req->input('type');

        $group->save();

        return redirect()->route('indexGroup')->with('success', 'Группа был успешно добавлен');
    }

    public function updateGroup ($id): Factory|View|Application {
        $group = Group::query()->findOrFail($id);

        return view('groups.update', compact('group'));
    }

    public function updatedGroup (int $id, GroupRequest $req): RedirectResponse
    {
        $group = Group::query()->findOrFail($id);

        $group->name = $req->input('name');
        $group->language = $req->input('language');
        $group->type = $req->input('type');

        $group->save();

        return redirect()->route('indexGroup')->with('success', 'Учитель был успешно обнавлен');
    }

    public function deleteGroup(int $id): RedirectResponse
    {
        $group = Group::query()->findOrFail($id);

        $group->delete();

        return redirect()->route('indexGroup')->with('success', 'Учитель был успешно удален');
    }
}
