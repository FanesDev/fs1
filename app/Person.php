<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $timestamps = false;

    const SEXES = [
        'M' => 'Masculino',
        'F' => 'Feminino',
    ];

    public function personalPhones() {
        return $this->hasMany('App\PersonalPhone');
    }


    public function customers(){
        return $this->morphOne('App\Customer', 'customerable');
    }

    /** 
     * Set the people first name.
     *
     * @param  string  $firstName
     * @return void
     */
    public function setFirstNameAttribute($firstName){
        $this->attributes['first_name'] = ucfirst(strtolower($firstName));
    }

    /** 
     * Set the people last name.
     *
     * @param  string  $lastName
     * @return void
     */
    public function setLastNameAttribute($lastName){
        $this->attributes['last_name'] = ucfirst(strtolower($lastName));

    }

    /**
     * Get the people CPF.
     *
     * @param  string  $cpf
     * @var  string  $cpfFormated
     * @return string
     */
    public function getCpfAttribute($cpf){
        $cpfFormated = preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);

        return $cpfFormated;
    }

    /**
     * Set the people CPF.
     *
     * @param  string  $cpf
     * @return void
     */
    public function setCpfAttribute($cpf){
        $this->attributes['cpf'] = preg_replace('/[^0-9]/', '', $cpf);

    }

    /** 
     * Get the people SEX.
     *
     * @var  string  $sex
     * @return string
     */
    public function getSexFormatedAttribute(){
        $sex = $this->sex;//Necessário por sair da convenção.

        if ($sex === 'M'){
            $sexFormated = self::SEXES['M'];
        }elseif ($sex === 'F'){
            $sexFormated = self::SEXES['F'];
        }else {
            $sexFormated = 'Indefinido';
        }
        return $sexFormated;
    }
}

