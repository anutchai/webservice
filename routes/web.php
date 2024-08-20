<?php

use App\Models\Country;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // หาประเทศที่ 1 ว่าผู้สอนที่คนที่ 1 คือใคร
    $c = Country::all();
    dd($c[0]->region[0]->province[0]->teacher[0]);

    // ผู้สอนคนที่ 1 อยู่ประเทศอะไร
    $t = Teacher::find(1);
    dd($t->province->region->country);

    return view('welcome');
});
