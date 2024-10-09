<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title_id',
    //     'name',
    //     'lastname',
    //     'email',
    //     'province_id',
    // ];
    //    or
    protected $guarded = [];

    public function province(){
        //            ส่วนกลับ    Model             FK         PK
        return $this->belongsTo(Province::class,'province_id','id');
    }
}
