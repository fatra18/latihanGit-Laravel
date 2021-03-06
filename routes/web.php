<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Teacher;
use Database\Seeders\StudentSeeder;
use Database\Seeders\TeacherSeeder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students',[StudentController::class,'index']);
Route::get('/teachers',[TeacherController::class,'index']);