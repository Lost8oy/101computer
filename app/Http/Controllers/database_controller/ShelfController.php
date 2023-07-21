<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shelf;
class ShelfController extends Controller
{
    public function create (){
        return view('shelf.create');
    }

    public function index () {
        $shelves = shelf::all();
        return view('shelf.index', ['shelves' => $shelves]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'unit_id'=> 'required',
            'code'=> 'required',
            'description' => 'nullable'
        ]);

        $newshelf = shelf::create($data);
        return redirect(route('shelf.index'));

    }
    public function edit (shelf $shelf){
        return view('shelf.edit', ['shelf' => $shelf]);
    }
    public function update (shelf $shelf, Request $request) {
        $data = $request->validate([
            'unit_id'=> 'required',
            'code'=> 'required',
            'description' => 'nullable'
        ]);

        $shelf->update($data);
        return redirect(route('shelf.index'))->with('success', 'Shelf Update Successfully');

    }
    public function destroy (shelf $shelf) {
        $shelf->delete();
        return redirect(route('shelf.index'))->with('success', 'Shelf delated Successfully');
    }
}
