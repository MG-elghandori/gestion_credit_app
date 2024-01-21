<?php

use App\Http\Controllers\DashbordController;
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

// Route::get('/', function () {
//     return view('Dashbord.Dashbord');
// });

Route::get('/Dashboard', [DashbordController::class,"index"])->name("Dashbord");
Route::get('/create', [DashbordController::class,"create"])->name("create");
Route::post('/register_user', [DashbordController::class,"register_user"])->name("register_user");
Route::delete('/delete_user/{id}', [DashbordController::class,"delete"])->name("delete_user");
Route::get('/corbeille', [DashbordController::class,"corbeille"])->name("corbeille");
Route::delete('/delete_corbeille/{id}', [DashbordController::class,"delete_corbeille"])->name("delete_corbeille");
