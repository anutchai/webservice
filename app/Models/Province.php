<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    // one to many or 1:M
    public function student(){
        return $this->hasMany(Student::class,'province_id','id');
    }

    public function teacher(){
        return $this->hasMany(Teacher::class,'province_id','id');
    }

    public function region(){
        //            ส่วนกลับ    Model             FK         PK
        return $this->belongsTo(Region::class,'region_id','id');
    }

}
