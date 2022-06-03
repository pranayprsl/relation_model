<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function showvillage($id)
    {
        $village = Village::find($id)->city;
       
        return view('village',compact('village'));
    }
}
