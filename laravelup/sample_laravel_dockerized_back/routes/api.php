<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;


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

// Route::get('/test-data', function(){
//     return 'hello';
// });

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('chart', 'DashboardController@chart');
    Route::get('user', 'UserController@user');
    Route::post('logout', [AuthController::class, 'logout']);
    Route::put('users/info', [AuthController::class, 'updateInfo']);
    Route::put('users/password', [AuthController::class, 'updatePassword']);
    // Route::post('upload', 'ImageController@upload');
    // Route::get('export', 'OrderController@export');

    Route::apiResource('users', 'UserController');
    Route::apiResource('roles', 'RoleController');
    Route::apiResource('products', 'ProductController');
    Route::apiResource('orders', 'OrderController')->only('index', 'show');
    Route::apiResource('permissions', 'PermissionController')->only('index');

    Route::resource('students', 'App\Http\Controllers\StudentController');

    Route::resource('departments', 'App\Http\Controllers\DepartmentController');

    // Route::get('departments', [DepartmentController::class, 'index']);
    // Route::get('departments/{id}', [DepartmentController::class, 'show']);
    // Route::post('departments', [DepartmentController::class, 'store']);
    // Route::put('departments/{id}', [DepartmentController::class, 'update']);
    // Route::delete('departments/{id}', [DepartmentController::class, 'destroy']);
    // Route::get('department', [DepartmentController::class, 'department']);
});
