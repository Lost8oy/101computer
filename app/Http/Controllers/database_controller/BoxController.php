<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Box;
class BoxController extends Controller
{
    public function create (){
        return view('box.create');
    }

    public function index () {
        $boxes = box::all();
        return view('box.index', ['boxes' => $boxes]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'item_id'=> 'required',
            'condition' => 'required'
        ]);

        $newbox = box::create($data);
        return redirect(route('unity.index'));

    }
    public function edit (box $box){
        return view('box.edit', ['box' => $box]);
    }
    public function update (box $box, Request $request) {
        $data = $request->validate([
            'item_id'=> 'required',
            'condition' => 'required'
        ]);

        $box->update($data);
        return redirect(route('box.index'))->with('success', 'Box Update Successfully');

    }
    public function destroy (box $box) {
        $box->delete();
        return redirect(route('box.index'))->with('success', 'Box delated Successfully');
    }
}
