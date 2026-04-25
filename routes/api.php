<?php

use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// temp 
Route::get('/tickets', function(){
    return Ticket::paginate(20);
});
