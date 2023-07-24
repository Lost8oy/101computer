<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
class CountryController extends Controller
{
    public function create (){
        return view('country.create');
    }

    public function index () {
        $countries = country::all();
        return view('country.index', ['countries' => $countries]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'name'=> 'required',
            'description' => 'nullable'
        ]);

        $newcountry = country::create($data);
        return redirect(route('country.index'));

    }
    public function edit (country $country){
        return view('country.edit', ['country' => $country]);
    }
    public function update (country $country, Request $request) {
        $data = $request->validate([
            'name'=> 'required',
            'description' => 'nullable'
        ]);

        $country->update($data);
        return redirect(route('country.index'))->with('success', 'Country Update Successfully');

    }
    public function destroy (country $country) {
        $country->delete();
        return redirect(route('country.index'))->with('success', 'Country delated Successfully');
    }
}
