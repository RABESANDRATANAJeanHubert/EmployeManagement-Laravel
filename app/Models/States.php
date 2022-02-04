<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class States extends Model
{
    use HasFactory;
    protected $fillable = ['country_id','name'];

    public function country(){

        return $this->belongsTo(Country::class);

    }

    public function city(){

        return $this->hasMany(City::class);

    }

    public function employees(){

        return $this->hasMany(Employee::class);
    }

}
