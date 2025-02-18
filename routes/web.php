<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('ajax-crud-datatable', [EmployeeController::class, 'index']);

Route::post('store', [EmployeeController::class, 'store']);

Route::post('edit', [EmployeeController::class, 'edit']);

Route::post('delete', [EmployeeController::class, 'destroy']);


