<?php

use App\Http\Controllers\Api\UserController;
use App\Models\Country;
use App\Models\Province;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});



// $min = 10;
    // $max = 30;
    // $sort = 'desc';

    // การ Query โดยใช้ ORM
    // $model = Student::query()
    // ->with('province')
    // ->whereHas('province', function($query) use(){
    //     $query->where("step", );
    // })
    // ->get();

    // การค้นหา ใน Relation ของ Province (1:M)

    // $model = Province::query()
    // ->with('teacher')
    // ->whereHas('teacher',function($query){
    //     $query->where('id','100');
    // })
    // ->get();

    // dd($model);




  // หาประเทศที่ 1 ว่าผู้สอนที่คนที่ 1 คือใคร
//   $c = Country::all();
//   dd($c[0]->region[0]->province[0]->teacher[0]);

  // ผู้สอนคนที่ 1 อยู่ประเทศอะไร
//   $t = Teacher::find(1);
//   dd($t->province->region->country);
