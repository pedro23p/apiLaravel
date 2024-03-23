<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        return Place::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'state' => 'required'
        ]);

        return Place::create($request->all());
    }

    public function show($id)
    {
        return Place::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $place = Place::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'state' => 'required'
        ]);

        $place->update($request->all());
        return $place;
    }

    public function destroy($id)
    {
        $place = Place::findOrFail($id);
        $place->delete();
        return response()->json(null, 204);
    }
}
