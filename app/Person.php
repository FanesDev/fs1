<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $timestamps = false;

    public function clients(){
        return $this->morphMany('App\Customer', 'client');
    }

    const SEXES = [
        'M' => 'Masculino',
        'F' => 'Feminino',
    ];

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

    public function getSexFormatedAttribute(){

        $sex = $this->sex;

        if ($sex === 'M'){
            $sexFormated = Person::SEXES['M'];
        }elseif ($sex === 'F'){
            $sexFormated = Person::SEXES['F'];
        }else {
            $sexFormated = 'Indefinido';
        }
        return $sexFormated;
    }
}

