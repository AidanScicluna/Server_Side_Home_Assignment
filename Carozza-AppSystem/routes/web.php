<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//default Route
Route::get('/', function () {
    return view('welcome');
});

//getting all car
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

//creating a new car
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');

//Create new car(POST request)
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');

//getting the details of a specific car
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

//getting the form for the edit of a car
Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');

//deleting car
Route::delete('/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');

//getting all manufacturers
Route::get('/manufacturers', [CarController::class, 'manufacturers'])->name('manufacturers.index');