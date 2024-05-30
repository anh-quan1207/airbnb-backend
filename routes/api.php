<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Location
Route::get('/locations', [LocationController::class, 'index']);
Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/room-detail', [RoomController::class, 'detail']);

// User Register
Route::post('/user', [UserController::class, 'store']);

//Booking
Route::post('/ticket', [TicketController::class, 'store']);
Route::get('/tickets/user/{userId}', [TicketController::class, 'getTicketsByUserId']);
Route::get('/tickets/room/{roomId}', [TicketController::class, 'getTicketsByRoomId']);

