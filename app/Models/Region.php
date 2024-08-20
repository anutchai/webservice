<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    // 1 : M (belongsTo = ส่วนกลับ)
    public function country(){
        //            ส่วนกลับ    Model             FK         PK
        return $this->belongsTo(Country::class,'country_id','id');
    }

    public function province(){
            //ชื่อ Model           FK    , PK
    return $this->hasMany(Province::class,'region_id','id');
    }
}
