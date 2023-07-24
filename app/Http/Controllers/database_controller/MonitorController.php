<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\monitor;
class MonitorController extends Controller
{
    public function create(){
        return view('monitor.create');
    }

    public function index () {
        $monitors = monitor::all();
        return view('monitor.index', ['monitors' => $monitors]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'position_id'=> 'required',
            'manufacturer_id' => 'required|numeric',
            'inventory_number' => 'required',
            'serial_number'=> 'required',
            'model' => 'required',
            'year'=> 'required',
            'color'=> 'required',
            'size'=> 'required',
            'pixels'=> 'required',
            'description' => 'nullable'
        ]);

        $newmonitor = monitor::create($data);
        return redirect(route('monitor.index'));

    }
    public function edit (monitor $monitor){
        return view('monitor.edit', ['monitor' => $monitor]);
    }
    public function update (monitor $monitor, Request $request) {
        $data = $request->validate([
            'position_id'=> 'required',
            'manufacturer_id' => 'required|numeric',
            'inventory_number' => 'required',
            'serial_number'=> 'required',
            'model' => 'required',
            'year'=> 'required',
            'color'=> 'required',
            'size'=> 'required',
            'pixels'=> 'required',
            'description' => 'nullable'
        ]);

        $monitor->update($data);
        return redirect(route('monitor.index'))->with('success', 'Monitor Update Successfully');

    }
    public function destroy (monitor $monitor) {
        $monitor->delete();
        return redirect(route('monitor.index'))->with('success', 'Monitor delated Successfully');
    }
}
