<?php

namespace App\Http\Controllers;


use App\Http\Requests\RoomRequest;
use App\Models\Room;
use App\Models\TypeOfRoom;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RoomController extends Controller
{
    public function index(): Factory|View|Application
    {
        $rooms = Room::all();

        return view('rooms.index', compact('rooms'));
    }

    public function addRoom(): Factory|View|Application
    {
        $typeOfRooms = TypeOfRoom::all();

        return view('rooms.create', compact('typeOfRooms'));
    }

    public function addedRoom(RoomRequest $req): RedirectResponse
    {
        $room = new Room();

        $room->number = $req->input('number');
        $room->stage = $req->input('stage');
        $room->type_of_room_id = $req->input('type_of_room_id');

        $room->save();

        return redirect()->route('indexRoom')->with('success', 'Команата успешно добавлено');
    }

    public function deleteRoom($id): RedirectResponse
    {
        $room = Room::query()->findOrFail($id);

        $room->delete();

        return redirect()->route('indexRoom')->with('success', 'Команата успешно удален');
    }

    public function updateRoom($id): Factory|View|Application
    {
        $room = Room::query()->findOrFail($id);
        $typeOfRoom = TypeOfRoom::all();

        return view('rooms.update', compact('room', 'typeOfRoom'));
    }

    public function updatedRoom($id, RoomRequest $req): RedirectResponse
    {
        $room = Room::query()->findOrFail($id);

        $room->number = $req->input('number');
        $room->stage = $req->input('stage');
        $room->type_of_room_id = $req->input('type_of_room_id');

        $room->save();

        return redirect()->route('indexRoom')->with('success', 'Команата успешно обнавлен');
    }
}
