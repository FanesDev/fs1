<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;

    public function clients(){
        return $this->morphMany('App\Customer', 'client');
    }
}

