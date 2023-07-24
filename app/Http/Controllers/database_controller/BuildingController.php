<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
class BuildingController extends Controller
{
    public function create (){
        return view('building.create');
    }

    public function index () {
        $buildings = building::all();
        return view('building.index', ['buildings' => $buildings]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'country'=> 'required',
            'city'=> 'required',
            'address'=> 'required',
            'civic_n'=> 'required',
            'cap'=> 'required',
            'description' => 'nullable'
        ]);

        $newbuilding = building::create($data);
        return redirect(route('building.index'));

    }
    public function edit (building $building){
        return view('building.edit', ['building' => $building]);
    }
    public function update (building $building, Request $request) {
        $data = $request->validate([
            'country'=> 'required',
            'city'=> 'required',
            'address'=> 'required',
            'civic_n'=> 'required',
            'cap'=> 'required',
            'description' => 'nullable'
        ]);

        $building->update($data);
        return redirect(route('building.index'))->with('success', 'Building Update Successfully');

    }
    public function destroy (building $building) {
        $building->delete();
        return redirect(route('building.index'))->with('success', 'Building delated Successfully');
    }
}
