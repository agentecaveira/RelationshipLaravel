<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['name', 'initials'];

    //many to one
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    //one to many
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    //Polymorphic
    public function comments()
    {
        //Polymorphic -> Passar a classe que se relaciona, juntamente com o métóo que foi implementado na classe
        return $this->morphMany(Comment::class, 'commentable');
    }
}
