<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
// C:\Users\PC\Desktop\hackathon\API\app\Http\Controllers\apiController.php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get all data
Route::get('list',[apiController::class,'list']);

// get specific id
Route::get('list/{id}',[apiController::class,'getById']);


// Optional for without id or null request parameter
Route::get('optional/{id?}',[apiController::class,'getByIdOptional']);

// add data
Route::post('add',[apiController::class,'addData']);