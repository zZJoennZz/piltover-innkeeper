<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json([
            'success' => true,
            'message' => 'Testing!',
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public static function store(Request $request)
    {
        //
        $roomType = new RoomType();
        $roomType->name = "King Suite";
        $roomType->default_rate = 3299.99;
        $roomType->default_max_capacity = 2;
        $roomType->is_enabled = true;
        $roomType->save();
        return response()->json('Test');
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomType $roomType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomType $roomType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomType $roomType)
    {
        //
    }
}
