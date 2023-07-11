<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomTypeController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'typeName' => 'required|unique:room_types,name',
            'defaultRate' => 'required|numeric',
            'defaultMaxCapacity' => 'required|numeric',
        ]);

        try {
            $newRoomType = new RoomType();
            $newRoomType->name = $request->typeName;
            $newRoomType->default_rate = $request->defaultRate;
            $newRoomType->default_max_capacity = $request->defaultMaxCapacity;
            $newRoomType->is_enabled = true;
            $newRoomType->save();

            return to_route('dashboard.show');
        } catch (\Exception $e) {
            return back()->withErrors(['Something went wrong. Please try again.']);
        }
    }
}
