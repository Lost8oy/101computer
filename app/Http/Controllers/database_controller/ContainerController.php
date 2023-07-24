<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Container;
class ContainerController extends Controller
{
    public function create(){
        return view('container.create');
    }

    public function index () {
        $containers = container::all();
        return view('containers.index', ['containers' => $containers]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'shelf_id'=> 'request',
            'code'=> 'required',
            'description' => 'nullable'
        ]);

        $newcontainer = container::create($data);
        return redirect(route('container.index'));

    }
    public function edit (container $container){
        return view('container.edit', ['container' => $container]);
    }
    public function update (container $container, Request $request) {
        $data = $request->validate([
            'shelf_id'=> 'request',
            'code'=> 'required',
            'description' => 'nullable'
        ]);

        $container->update($data);
        return redirect(route('container.index'))->with('success', 'Container Update Successfully');

    }
    public function destroy (container $container) {
        $container->delete();
        return redirect(route('container.index'))->with('success', 'Container delated Successfully');
    }
}
