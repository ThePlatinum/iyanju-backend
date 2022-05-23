<?php

use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\SubmissionsController;
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

Route::post('submission', [SubmissionsController::class, 'submit']);
Route::get('getsubmissions', [SchedulesController::class, 'getsubmissions']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
