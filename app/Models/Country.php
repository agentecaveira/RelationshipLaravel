<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    //one to one
    public function location()
    {
        return $this->hasOne(Location::class);
    }

    //One to Many
    public function states()
    {
        return $this->hasMany(State::class);
    }

    //Has Many Through
    public function cities()
    {
        return $this->hasManyThrough(City::class, State::class);
    }
}
