<?php

namespace App\Models;

use App\Model\Company;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_city');
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function comments()
    {
        //Polymorphic -> Passar a classe que se relaciona, juntamente com o métóo que foi implementado na classe
        return $this->morphMany(Comment::class, 'commentable');
    }
}
