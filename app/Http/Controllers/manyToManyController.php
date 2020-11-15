<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\City;
use Illuminate\Http\Request;

class manyToManyController extends Controller
{
    public function manyToMany()
    {
        $city = City::where('name', 'Porto Velho')->first();
        echo "<b>$city->name</b> <br>";

        $companies = $city->companies;

        foreach ($companies as $company){
            echo "$company->name <br>";
        }
    }

    public function manyToManyInverse()
    {
        $company = Company::where('name', 'Burger King')->first();
        echo "<b>$company->name</b> <br>";

        $cities = $company->cities;

        foreach ($cities as $city){
            echo "$city->name <br>";
        }
    }

    public function manyToManyInsert()
    {
        $dataForm = [
            3,
            4
        ];
        $company = Company::find(3);
         //inserir (sempre acrescenta a informação) função inversa é o detach
        //$company->cities()->attach($dataForm);

        //Sincroniza, reomove os dados anterires e adiciona os novos
        $company->cities()->sync($dataForm);

        echo "<b>$company->name</b> <br>";

        $cities = $company->cities;

        foreach ($cities as $city){
            echo "$city->name <br>";
        }

    }
}
