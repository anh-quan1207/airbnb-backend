<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LocationController as UserLocationController;
use App\Http\Controllers\User\RoomController as UserRoomController;
use App\Http\Controllers\User\TicketController as UserTicketController;
use App\Http\Controllers\User\UserController as UserUserController;
use App\Http\Controllers\Admin\TicketController as AdminTicketController;

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

/////////// USER
Route::get('/locations', [UserLocationController::class, 'index']);
Route::get('/rooms', [UserRoomController::class, 'index']);
Route::get('/room-detail', [UserRoomController::class, 'detail']);

Route::post('/user', [UserUserController::class, 'store']);

Route::post('/ticket', [UserTicketController::class, 'store']);
Route::get('/tickets/user/{userId}', [UserTicketController::class, 'getTicketsByUserId']);
Route::get('/tickets/room/{roomId}', [UserTicketController::class, 'getTicketsByRoomId']);



/////////// ADMIN
Route::get('/admin/tickets', [AdminTicketController::class, 'getAllTickets']);
