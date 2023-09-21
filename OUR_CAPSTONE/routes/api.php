<?php

use App\Http\Controllers\AuthenticationApiController;
use App\Http\Controllers\Pubg_clansApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/admin', function (Request $request){
    return $request->admin();
});

Route::middleware('auth:sanctum')->group(function () {
 }); 
    Route::post('/logout2', [AuthenticationApiController::class, 'logout2']); 
    Route::get('/pubg_clans', [Pubg_ClansApiController::class, 'index']);
    Route::post('/pubg_clans', [Pubg_ClansApiController::class, 'store']);
    Route::get('/pubg_clans/{pubg_clan}', [Pubg_ClansApiController::class, 'show']);
    Route::put('/pubg_clans/{pubg_clan}', [Pubg_ClansApiController::class, 'update']);
    Route::patch('/pubg_clans/{pubg_clan}', [Pubg_ClansApiController::class, 'update']);
    Route::delete('/pubg_clans/{pubg_clan}', [Pubg_ClansApiController::class, 'destroy']); 
//}); //Lock the DATA 
Route::post('/login2', [AuthenticationApiController::class, 'login2']);
