<?php

namespace App\Http\Controllers;

use App\Models\Group;

class GroupController extends Controller
{
    public function index () {
        $group = Group::query()->paginate();

        return view('group', compact('group'));
    }

    public function add_group () {

    }
}
