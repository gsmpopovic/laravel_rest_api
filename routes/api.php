<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/users", "RestApiController@getAllUsers");
Route::get("/users/{id}", "RestApiController@getOneUser");

Route::post("/users", "RestApiController@createUser");
Route::put("/users/{id}", "RestApiController@updateUser");

Route::delete("/users", "RestApiController@deleteAllUsers");
Route::delete("/users/{id}", "RestApiController@deleteOneUser");