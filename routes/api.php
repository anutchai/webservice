<?php

use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




// กำหนด Route API Login ไปที่ไฟล์ AuthController
Route::post('login',[AuthController::class,'login']);

// สร้างประตู หรือ Middleware สำหรับตรวจสอบสิทธิการเข้าใช้งาน
Route::group(['middleware' => [
        'auth:sanctum',
    ]],
    function(){
        // กำหนด Route API ไปที่ไฟล์ TeacherController
        Route::resource('teacher', TeacherController::class);
        // กำหนด Route สำหรับการ Logout
        Route::post('logout',[AuthController::class,'logout']);
    }
);








// Route::get('students', [UserController::class, 'index'])->name('userview');

// Route::resource('students',UserController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
