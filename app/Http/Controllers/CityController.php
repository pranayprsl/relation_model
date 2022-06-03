<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Village;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function add_city()
    {
        $village = new Village;
        $village->village_name = 'khaperkheda';
        $village->pincode = "123123";
        
        $city = new City;
        $city->city_name = 'Nagpur';
        $city->save();

        $city->village()->save($village);
    }

    public function show($id)
    {
        $data = City::find($id)->village;
       
        return view('city',compact('data'));
    }
}
