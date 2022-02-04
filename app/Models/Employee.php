<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'address',
        'country_id',
        'city_id',
        'zip_code',
        'birthday',
        'date_hired'
    ];

        protected $casts = [

            'birthday' => 'date:Y-m-d',
            'date_hired' => 'date:Y-m-d',
        ];


    public  function country(){
        return $this->belongsTo(Country::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function state(){
        return $this->belongsTo(States::class);
    }
}
