<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/', function () {
    return 'API';
});


route::apiResource('customers', CustomerController::class);
route::apiResource('customers.orders', OrderController::class);

route::Post('/register', [AuthController::class, 'register']);
route::Post('/login', [AuthController::class, 'login']);
route::Post('/logout', [AuthController::class, 'logout']);