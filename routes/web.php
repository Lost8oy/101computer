<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\JoystickController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\CableController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\UnityController;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\BoxController;

Route::get('/', function () {
    return view('index');
});

route::group(['namespace'=>'User', 'prefix'=>'costumer'], function (){

    route::get('/country', [CountryController::class, 'index'])->name('country.index');
   
    //manufacturer route
    route::get('/manufacturer', [ManufacturerController::class, 'index'])->name('manufacturer.index');

    //keyboard route
    route::get('/keyboard', [KeyboardController::class, 'index'])->name('keyboard.index');

    //joystick route
    route::get('/joystick', [JoystickController::class, 'index'])->name('joystick.index');
  
    //computer controller
    route::get('/computer', [ComputerController::class, 'index'])->name('computer.index');
  
    //monitor route
    route::get('/monitor', [MonitorController::class, 'index'])->name('monitor.index');
    
    //cable route
    route::get('/cable', [CableController::class, 'index'])->name('cable.index');
   
    //building route
    route::get('/building', [BuildingController::class, 'index'])->name('building.index');
   
    //zone route
    route::get('/zone', [ZoneController::class, 'index'])->name('zone.index');

    //unity route
    route::get('/unity', [UnityController::class, 'index'])->name('unity.index');
    
    //shelf route
    route::get('/shelf', [ShelfController::class, 'index'])->name('shelf.index');
 
    //container route 
    route::get('/container', [ContainerController::class, 'index'])->name('container.index');
   
    //image route
    route::get('/image', [ImageController::class, 'index'])->name('image.index');

    //issue route 
    route::get('/issue', [IssueController::class, 'index'])->name('issue.index');

    //box route
    route::get('/box', [BoxController::class, 'index'])->name('box.index');
});