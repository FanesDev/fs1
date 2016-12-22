<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    public $timestamps = false;

    public function detail()
    {
        return $this->hasMany('App\SalesProduct');
    } 
}
