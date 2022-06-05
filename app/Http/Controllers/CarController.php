<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Customer;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function add_car()
    {
        $car = new Car;
        $car->model = 'finlander';
        $car->save();
    }

    public function show_customer($id)
    {
        $cars = Customer::find($id)->cars;
        dd($cars);
    }
}
