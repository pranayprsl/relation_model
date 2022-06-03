<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Village;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($id)
    {
        $city = City::find($id);
        var_dump($city->village->village_name);

    }
}
