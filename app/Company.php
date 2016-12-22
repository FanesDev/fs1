<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;

    public function customers(){
        return $this->morphOne('App\Customer', 'customerable');
    }
}

