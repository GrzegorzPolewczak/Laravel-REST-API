<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('polewczak/310706/people', [PeopleController::class, 'create']);

Route::get('polewczak/310706/people/{people}', [PeopleController::class, 'read']);

Route::put('polewczak/310706/people/{people}', [PeopleController::class, 'update']);

Route::delete('polewczak/310706/people/{people}', [PeopleController::class, 'delete']);

Route::get('polewczak/310706/people', [PeopleController::class, 'readall']);