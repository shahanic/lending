<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', function () {
return view('app' );
});

Route::post('/save-car', [CarController::class, 'saveCar']);
Route::post('/save-car', [CarController::class, 'saveCar']);
Route::post('/get-cars', [CarController::class, 'getCars']);
Route::post('/delete-car', [CarController::class, 'deleteCar']);
