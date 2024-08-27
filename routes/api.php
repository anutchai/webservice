<?php

use App\Http\Controllers\Api\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// กำหนด Route API ไปที่ไฟล์ TeacherController
Route::resource('teacher', TeacherController::class);









// Route::get('students', [UserController::class, 'index'])->name('userview');

// Route::resource('students',UserController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
