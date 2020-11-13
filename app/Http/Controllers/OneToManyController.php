<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class OneToManyController extends Controller
{
    public function oneToMany()
    {
        //Forma para otimizar consulta;
        $countries = Country::where('id', '>', '0')->with('states')->get();

        $country = Country::where('name', 'Brasil')->first();

        echo $country->name;

        $states = $country->states;

        foreach ($states as $state){
            echo "<hr> $state->initials - $state->name";
        }
    }

    public function manyToOne()
    {
        $stateName = 'Rondonia';
        $state = State::where('name', $stateName)->first();
        echo "<br> $state->name";

        $country = $state->country;
        echo "<br> Pais: $country->name";

    }

    public function oneToManyTwo()
    {
        //Forma para otimizar consulta;
        $countries = Country::where('id', '>', '0')->with('states')->get();

        $country = Country::where('name', 'Brasil')->first();

        echo $country->name;

        $states = $country->states;

        foreach ($states as $state){
            echo "<hr> $state->initials - $state->name :";

            foreach ($state->cities as $city){
                echo " $city->name, ";
            }
        }
    }

    public function oneToManyInsert()
    {
        $dataForm = [
          'name' => 'Ceara',
          'initials' => 'CE'
        ];

        $country = Country::find(1);

        $insertState = $country->states()->create($dataForm);

        var_dump($insertState);

    }
}
