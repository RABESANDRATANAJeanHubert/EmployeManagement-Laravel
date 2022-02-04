<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\HasMany;
// use NunoMaduro\Collision\Adapters\Phpunit\State;

class City extends Model
{
    use HasFactory;
     protected $fillable = ['state_id','name'];

    public function state(){

        return $this->belongsTo(States::class);

    }

    public function employees(){

        return $this->hasMany(Employee::class);
    }
}
