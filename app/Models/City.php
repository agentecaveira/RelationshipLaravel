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
}
