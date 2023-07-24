<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cable;
class CableController extends Controller
{
    public function create (){
        return view('cable.create');
    }

    public function index () {
        $cables = cable::all();
        return view('cable.index', ['cables' => $cables]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'position_id'=> 'required',
            'type'=> 'required',
            'description' => 'nullable'
        ]);

        $newcable = cable::create($data);
        return redirect(route('cable.index'));

    }
    public function edit (cable $cable){
        return view('cable.edit', ['cable' => $cable]);
    }
    public function update (cable $cable, Request $request) {
        $data = $request->validate([
            'position_id'=> 'required',
            'type'=> 'required',
            'description' => 'nullable'
        ]);

        $cable->update($data);
        return redirect(route('cable.index'))->with('success', 'Cable Update Successfully');

    }
    public function destroy (cable $cable) {
        $cable->delete();
        return redirect(route('cable.index'))->with('success', 'Cable delated Successfully');
    }
}
