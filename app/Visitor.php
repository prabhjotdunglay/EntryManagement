<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{

    public function company()
    {
        return $this->belongsTo('App\User');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }
    public function employee(){
        return $this->belongsTo('App\Employee');
    }

}
