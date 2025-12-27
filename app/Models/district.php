<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    public function school(){
        return $this->hasMany(School::class, "districts_id");
    }
}
