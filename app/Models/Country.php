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

    //Polymorphic
    public function comments()
    {
        //Polymorphic -> Passar a classe que se relaciona, juntamente com o métóo que foi implementado na classe
        return $this->morphMany(Comment::class, 'commentable');
    }
}
