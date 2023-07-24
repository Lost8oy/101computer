<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;
class ZoneController extends Controller
{
    public function create (){
        return view('zone.create');
    }

    public function index () {
        $zones = zone::all();
        return view('zone.index', ['zones' => $zones]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'building_id' => 'required',
            'denomination' => 'required',
            'floor' => 'required',
            'description' => 'nullable'
        ]);

        $newzone = zone::create($data);
        return redirect(route('zone.index'));

    }
    public function edit (zone $zone){
        return view('zone.edit', ['zone' => $zone]);
    }
    public function update (zone $zone, Request $request) {
        $data = $request->validate([
            'building_id' => 'required',
            'denomination' => 'required',
            'floor' => 'required',
            'description' => 'nullable'
        ]);

        $zone->update($data);
        return redirect(route('zone.index'))->with('success', 'Zone Update Successfully');

    }
    public function destroy (zone $zone) {
        $zone->delete();
        return redirect(route('zone.index'))->with('success', 'Zone delated Successfully');
    }
}
