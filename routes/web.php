<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', [DataController::class, 'index']);
Route::post('/store-data', [DataController::class, 'store']);


// Route::get('/', function () {
//     return view('welcome');
// });
