<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    public function oneToOne()
    {
        $country = Country::find(1);

        echo $country->name;

        $location = $country->location;

        echo "<hr> Latitude: {$location->latitude}<br>";
        echo "Longitute: {$location->longitude}<br>";
    }

    public function oneToOneInverse()
    {
        $latitude = 123;
        $longitude = 321;

        $location = Location::where('latitude', $latitude)
            ->where('longitude', $longitude)
            ->first();
        $country = $location->country;
        echo $country->name;
    }

    public function oneToOneInsert()
    {
        $dataForm = [
          'name' => 'Belgica',
          'latitude' => 78,
          'longitude' => 87
        ];

        $country = Country::create($dataForm);

//        $location = new Location();
//        $location->country_id = $country->id;
//        $location->latitude = $dataForm['latitude'];
//        $location->longitude = $dataForm['longitude'];
//        $saveLocation = $location->save();

        $location = $country->location()->create($dataForm);

    }
}
