<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    public function create (){
        return view('image.create');
    }

    public function index () {
        $images = image::all();
        return view('image.index', ['images' => $images]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'item_id'=> 'required',
            'path'=> 'required',
            'description' => 'nullable'
        ]);

        $newimage = image::create($data);
        return redirect(route('image.index'));

    }
    public function edit (image $image){
        return view('image.edit', ['image' => $image]);
    }
    public function update (image $image, Request $request) {
        $data = $request->validate([
            'item_id'=> 'required',
            'path'=> 'required',
            'description' => 'nullable'
        ]);

        $image->update($data);
        return redirect(route('image.index'))->with('success', 'Image Update Successfully');

    }
    public function destroy (image $image) {
        $image->delete();
        return redirect(route('image.index'))->with('success', 'Image delated Successfully');
    }
}
