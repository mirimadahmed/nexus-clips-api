<?php

use App\Http\Controllers\Clips;
use App\Http\Controllers\User;
use App\Http\Controllers\Share;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('clips/{user_id}', [Clips::class, 'get_user_clips']);

Route::get('share/{user_id}', [Clips::class, 'shareClip']);

Route::get('users/login', [User::class, 'login']);

Route::get('users/register', [User::class, 'register']);

