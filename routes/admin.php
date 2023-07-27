<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function(){

Route::middleware('auth')->group(function () {
    Route::get('/profile/password', [ProfileController::class, 'changepassword'])->name('profile.change.password');
    
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile/view', [ProfileController::class, 'view'])->name('profile.view');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/profile/password', [ProfileController::class, 'updatepassword'])->name('profile.password.update');

});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/terms', [AdminController::class, 'terms'])->name('admin.terms');

});
});
require __DIR__.'/auth.php';


route::get('/country', [CountryController::class, 'index'])->name('country.index');
    route::get('/country/create', [CountryController::class, 'create'])->name('country.create');
    route::post('/country', [CountryController::class, 'store'])->name('country.store');
    route::get('/country/{country}/edit', [CountryController::class, 'edit'])->name('country.edit');
    route::put('/country/{country}/update', [CountryController::class, 'update'])->name('country.update');
    route::delete('/country/{country}/destroy', [CountryController::class, 'destroy'])->name('country.destroy');
    //manufacturer route
    route::get('/manufacturer', [ManufacturerController::class, 'index'])->name('manufacturer.index');
    route::get('/manufacturer/create', [ManufacturerController::class, 'create'])->name('manufacturer.create');
    route::post('/manufacturer', [ManufacturerController::class, 'store'])->name('manufacturer.store');
    route::get('/manufacturer/{manufacturer}/edit', [ManufacturerController::class, 'edit'])->name('manufacturer.create');
    route::put('/manufacturer/{manufacturer}/update', [ManufacturerController::class, 'update'])->name('manufacturer.update');
    route::delete('/manufacturer/{manufacturer}/destroy', [ManufacturerController::class, 'destroy'])->name('manufacturer.destroy');
    //keyboard route
    route::get('/keyboard', [KeyboardController::class, 'index'])->name('keyboard.index');
    route::get('/keyboard/create', [KeyboardController::class, 'create'])->name('keyboard.create');
    route::post('/keyboard', [KeyboardController::class, 'store'])->name('keyboard.store');
    route::get('/keyboard/{keyboard}/edit', [KeyboardController::class, 'edit'])->name('keyboard.create');
    route::put('/keyboard/{keyboard}/update', [KeyboardController::class, 'update'])->name('keyboard.update');
    route::delete('/keyboard/{keyboard}/destroy', [KeyboardController::class, 'destroy'])->name('keyboard.destroy');
    //joystick route
    route::get('/joystick', [JoystickController::class, 'index'])->name('joystick.index');
    route::get('/joystick/create', [JoystickController::class, 'create'])->name('joystick.create');
    route::post('/joystick', [JoystickController::class, 'store'])->name('joystick.store');
    route::get('/joystick/{joystick}/edit', [JoystickController::class, 'edit'])->name('joystick.create');
    route::put('/joystick/{joystick}/update', [JoystickController::class, 'update'])->name('joystick.update');
    route::delete('/joystick/{joystick}/destroy', [JoystickController::class, 'destroy'])->name('joystick.destroy');
    //computer controller
    route::get('/computer', [ComputerController::class, 'index'])->name('computer.index');
    route::get('/computer/create', [ComputerController::class, 'create'])->name('computer.create');
    route::post('/computer', [ComputerController::class, 'store'])->name('computer.store');
    route::get('/computer/{computer}/edit', [ComputerController::class, 'edit'])->name('computer.create');
    route::put('/computer/{computer}/update', [ComputerController::class, 'update'])->name('computer.update');
    route::delete('/computer/{computer}/destroy', [ComputerController::class, 'destroy'])->name('computer.destroy');
    //monitor route
    route::get('/monitor', [MonitorController::class, 'index'])->name('monitor.index');
    route::get('/monitor/create', [MonitorController::class, 'create'])->name('monitor.create');
    route::post('/monitor', [MonitorController::class, 'store'])->name('monitor.store');
    route::get('/monitor/{monitor}/edit', [MonitorController::class, 'edit'])->name('monitor.create');
    route::put('/monitor/{monitor}/update', [MonitorController::class, 'update'])->name('monitor.update');
    route::delete('/monitor/{monitor}/destroy', [MonitorController::class, 'destroy'])->name('monitor.destroy');
    //cable route
    route::get('/cable', [CableController::class, 'index'])->name('cable.index');
    route::get('/cable/create', [CableController::class, 'create'])->name('cable.create');
    route::post('/cable', [CableController::class, 'store'])->name('cable.store');
    route::get('/cable/{cable}/edit', [CableController::class, 'edit'])->name('cable.create');
    route::put('/cable/{cable}/update', [CableController::class, 'update'])->name('cable.update');
    route::delete('/cable/{cable}/destroy', [CableController::class, 'destroy'])->name('cable.destroy');
    //building route
    route::get('/building', [BuildingController::class, 'index'])->name('building.index');
    route::get('/building/create', [BuildingController::class, 'create'])->name('building.create');
    route::post('/building', [BuildingController::class, 'store'])->name('building.store');
    route::get('/building/{building}/edit', [BuildingController::class, 'edit'])->name('building.create');
    route::put('/building/{building}/update', [BuildingController::class, 'update'])->name('building.update');
    route::delete('/building/{building}/destroy', [BuildingController::class, 'destroy'])->name('building.destroy');
    //zone route
    route::get('/zone', [ZoneController::class, 'index'])->name('zone.index');
    route::get('/zone/create', [ZoneController::class, 'create'])->name('zone.create');
    route::post('/zone', [ZoneController::class, 'store'])->name('zone.store');
    route::get('/zone/{zone}/edit', [ZoneController::class, 'edit'])->name('zone.create');
    route::put('/zone/{zone}/update', [ZoneController::class, 'update'])->name('zone.update');
    route::delete('/zone/{zone}/destroy', [ZoneController::class, 'destroy'])->name('zone.destroy');
    //unity route
    route::get('/unity', [UnityController::class, 'index'])->name('unity.index');
    route::get('/unity/create', [UnityController::class, 'create'])->name('unity.create');
    route::post('/unity', [UnityController::class, 'store'])->name('unity.store');
    route::get('/unity/{unity}/edit', [UnityController::class, 'edit'])->name('unity.create');
    route::put('/unity/{unity}/update', [UnityController::class, 'update'])->name('unity.update');
    route::delete('/unity/{unity}/destroy', [UnityController::class, 'destroy'])->name('unity.destroy');
    //shelf route
    route::get('/shelf', [ShelfController::class, 'index'])->name('shelf.index');
    route::get('/shelf/create', [ShelfController::class, 'create'])->name('shelf.create');
    route::post('/shelf', [ShelfController::class, 'store'])->name('shelf.store');
    route::get('/shelf/{shelf}/edit', [ShelfController::class, 'edit'])->name('shelf.create');
    route::put('/shelf/{shelf}/update', [ShelfController::class, 'update'])->name('shelf.update');
    route::delete('/shelf/{shelf}/destroy', [ShelfController::class, 'destroy'])->name('shelf.destroy');
    //container route 
    route::get('/container', [ContainerController::class, 'index'])->name('container.index');
    route::get('/container/create', [ContainerController::class, 'create'])->name('container.create');
    route::post('/container', [ContainerController::class, 'store'])->name('container.store');
    route::get('/container/{container}/edit', [ContainerController::class, 'edit'])->name('container.create');
    route::put('/container/{container}/update', [ContainerController::class, 'update'])->name('container.update');
    route::delete('/container/{container}/destroy', [ContainerController::class, 'destroy'])->name('container.destroy');
    //image route
    route::get('/image', [ImageController::class, 'index'])->name('image.index');
    route::get('/image/create', [ImageController::class, 'create'])->name('image.create');
    route::post('/image', [ImageController::class, 'store'])->name('image.store');
    route::get('/image/{image}/edit', [ImageController::class, 'edit'])->name('image.create');
    route::put('/image/{image}/update', [ImageController::class, 'update'])->name('image.update');
    route::delete('/image/{image}/destroy', [ImageController::class, 'destroy'])->name('image.destroy');
    //issue route 
    route::get('/issue', [IssueController::class, 'index'])->name('issue.index');
    route::get('/issue/create', [IssueController::class, 'create'])->name('issue.create');
    route::post('/issue', [IssueController::class, 'store'])->name('issue.store');
    route::get('/issue/{issue}/edit', [IssueController::class, 'edit'])->name('issue.create');
    route::put('/issue/{issue}/update', [IssueController::class, 'update'])->name('issue.update');
    route::delete('/issue/{issue}/destroy', [IssueController::class, 'destroy'])->name('issue.destroy');
    //box route
    route::get('/box', [BoxController::class, 'index'])->name('box.index');
    route::get('/box/create', [BoxController::class, 'create'])->name('box.create');
    route::post('/box', [BoxController::class, 'store'])->name('box.store');
    route::get('/box/{box}/edit', [BoxController::class, 'edit'])->name('box.create');
    route::put('/box/{box}/update', [BoxController::class, 'update'])->name('box.update');
    route::delete('/box/{box}/destroy', [BoxController::class, 'destroy'])->name('box.destroy');
