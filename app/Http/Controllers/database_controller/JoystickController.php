<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joystick;
class JoystickController extends Controller
{
    public function create(){
        return view('joystick.create');
    }

    public function index(){
        $joysticks = joystick::all();
        return view('joystick.index', ['joysticks', $joysticks]);
    }

    public function store(Request $request){
        $data = $request -> validate ([
            'position_id'=> 'request',
            'manufacturer_id'=> 'request',
            'inventory_number'=> 'request',
            'serial_number'=> 'request',
            'model'=>'request',
            'description'=>'nullable'
        ]);
    }

    public function edit(joystick $joystick){
        return view('joystrick', ['joystick', $joystick]);

    }
    
    public function update(joystick $joystick, Request $request){
        $data = $request -> validate([
            'position_id'=> 'request',
            'manufacturer_id'=> 'request',
            'inventory_number'=> 'request',
            'serial_number'=> 'request',
            'model'=>'request',
            'description'=>'nullable'
        ]);
        $joystick->update($data);
        return redirect(route('joystick.index'))->with('success', 'Joystick Update Successfully');
    }

    public function destroy(joystick $joystick){
        $joystick->delete();
        return redirect(route('joystick.index'))->with('success', 'Joystick Deleated Successfully');
    }

}
