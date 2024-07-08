<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VaccineRecordController;
use App\Http\Controllers\VaccineYearChartController;
use App\Http\Controllers\VaccineProgramChartController;

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
    return redirect()->route('faculty.index');
});

Route::resource('/faculty', FacultyController::class);
Route::resource('/program', ProgramController::class);
Route::resource('/student', StudentController::class);
Route::resource('/vaccine', VaccineController::class);
Route::resource('/vaccine_record', VaccineRecordController::class);
Route::get('/vaccine-year-chart',[VaccineYearChartController::class,'index']);
Route::get('/vaccine-program-chart',[VaccineProgramChartController::class,'index']);

