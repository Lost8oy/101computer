<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unity;
class UnityController extends Controller
{
    public function create (){
        return view('unity.create');
    }

    public function index () {
        $units = unity::all();
        return view('unity.index', ['units' => $units]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'zone_id'=> 'required',
            'code'=> 'required',
            'description' => 'nullable'
        ]);

        $newunity = unity::create($data);
        return redirect(route('unity.index'));

    }
    public function edit (unity $unity){
        return view('unity.edit', ['unity' => $unity]);
    }
    public function update (unity $unity, Request $request) {
        $data = $request->validate([
            'zone_id'=> 'required',
            'code'=> 'required',
            'description' => 'nullable'
        ]);

        $unity->update($data);
        return redirect(route('unity.index'))->with('success', 'Unity Update Successfully');

    }
    public function destroy (unity $unity) {
        $unity->delete();
        return redirect(route('unity.index'))->with('success', 'Unity delated Successfully');
    }
}
