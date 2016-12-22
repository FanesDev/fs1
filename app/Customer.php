<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    const CLIENT_TYPE = ['Pessoa Física', 'Pessoa Jurídica'];

    public function customerable() {
        return $this->morphTo();
    }

    protected $dates = [
        'customer_since',
    ];

    /** 
     * Get the people SEX.
     *
     * @var  string  $sex
     * @return string
     */
    public function getClientTypeAttribute(){
        $customerType = $this->customerable_type;//Necessário por sair da convenção.

        if ($customerType === 'App\Person'){
            $clientType = self::CLIENT_TYPE[0];
        }elseif ($customerType === 'App\Company'){
            $clientType = self::CLIENT_TYPE[1];
        }else {
            $clientType = 'Indefinido';
        }
        return $clientType;
    }
}

