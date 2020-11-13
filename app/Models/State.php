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
}
