<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalPhone extends Model
{
    public $timestamps = false; 

    public function person() {
        return $this->belongsTo('App\Person');
    }

}
