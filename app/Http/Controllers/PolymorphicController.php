<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class PolymorphicController extends Controller
{
    public function polymorphic()
    {
        $city = City::where('name', 'Porto Velho')->first();
        echo $city->name;

        $comments  = $city->comments()->get();

        foreach ($comments as $comment){
            echo "$comment->description <hr>";
        }

    }

    public function polymorphicInsert()
    {
//        $city = City::where('name', 'Porto Velho')->first();
//        echo $city->name;

//        $state = State::where('name', 'Rondonia')->first();
//        echo $state->name;

        $country = Country::where('name', 'Brasil')->first();
        echo $country->name;
        $comment = $country->comments()->create([
            'description' => 'Brasil é um país muito alegre '.date('YmHis'),
        ]);

        dd($comment);
    }
}
