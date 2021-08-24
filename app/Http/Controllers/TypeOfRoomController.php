<?php

namespace App\Http\Controllers;


use App\Http\Requests\TypeOfRoomRequest;
use App\Models\TypeOfRoom;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TypeOfRoomController extends Controller
{
    public function index(): Factory|View|Application
    {
        $typeOfRooms = TypeOfRoom::all();

        return view('type-of-rooms.index', compact('typeOfRooms'));
    }

    public function addTypeOfRoom(): Factory|View|Application
    {
        return view('type-of-rooms.create');
    }

    public function addedTypeOfRoom(TypeOfRoomRequest $req): RedirectResponse
    {
        $typeOfRoom = new TypeOfRoom();

        $typeOfRoom->name = $req->input('name');

        $typeOfRoom->save();

        return redirect()->route('indexTypeOfRoom')->with('success', 'Тип успешно добавлен');
    }

    public function deleteTypeOfRoom($id): RedirectResponse
    {
        $typeOfRoom = TypeOfRoom::query()->findOrFail($id);

        $typeOfRoom->delete();

        return redirect()->route('indexTypeOfRoom')->with('success', 'Тип успешно удален');
    }

    public function updateTypeOfRoom($id): Factory|View|Application
    {
        $typeOfRoom = TypeOfRoom::query()->findOrFail($id);

        return view('type-of-rooms.update', compact('typeOfRoom'));
    }

    public function updatedTypeOfRoom($id, TypeOfRoomRequest $req): RedirectResponse
    {
        $typeOfRoom = TypeOfRoom::query()->findOrFail($id);

        $typeOfRoom->name = $req->input('name');

        $typeOfRoom->save();

        return redirect()->route('indexTypeOfRoom')->with('success', 'Тип успешно обнавлен');
    }
}
