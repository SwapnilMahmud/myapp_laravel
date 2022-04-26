<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PdfController;
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
// Route::get('/', function () {
//     return view('filterbydate');
// });

//dependency dropdown...........................................by jquery
Route::get('/index', [StudentController::class, 'getCountry']);
Route::post('/getState',[StudentController::class,'getState']);
Route::post('/getCity',[StudentController::class,'getCity']);
//dependency dropdown...........................................

Route::get('/', [CustomerController::class, 'login']);
Route::get('/registration', [CustomerController::class, 'register']);
Route::post('/registration_process',[CustomerController::class,'registration_process'])->name('registration.registration_process');
Route::get('/verification/{id}',[CustomerController::class,'email_verification']);
Route::get('/employee_add', [StudentController::class, 'employee_add']);
Route::post('/empadd_process',[StudentController::class,'store'])->name('empadd_process');
Route::get('/fetch-employee', [StudentController::class, 'fetchemployee']);
Route::get('/employee',[StudentController::class,'empData']);



Route::delete('/selected-students',[StudentController::class,'deleteCheckedStudents'])->name('student.deleteSelected');
Route::delete('/students/{id}',[StudentController::class,'deleteStudent']);

Route::get('pdf',[PdfController::class,'generate']);
Route::get('/excel',[PdfController::class, 'generateexcel']);