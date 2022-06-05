<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Car;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()
    {
        $customer = new Customer;
        $customer->name = 'ravindra';
        $customer->save();

        $carid = [1,3,2];
        $customer->cars()->attach($carid);
    }

    public function show_cars($id)
    {
        $customer = Car::find($id)->customers;
        dd($customer);
    }
}
