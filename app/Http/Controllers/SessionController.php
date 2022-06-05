<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function welcome(Request $request)
    {
        // storing the data in the session
       $request->session()->put('name','prajwal');
       $request->session()->put('city','mumbai');

       //retriving the data through the session
       $name = $request->session()->get('name');
       $roll = $request->session()->get('roll');
       $city = $request->session()->get('city','nagpur');
      // i am useing closer function
       $price = $request->session()->get('price', function(){
           return 102;
       });

    //    $data = $request->session()->all();
    //    dd($data);

    //    if($request->session()->has('name')){
    //        dd('ha use mil gay');
    //    }
    //    dd('nahi hey be tu');
    // if($request->session()->exists('roll'))
    // {
    //     dd('he hey to present');
    // }dd('bhag be sale');
    // if($request->session()->missing('roll'))
    // {
    //     dd('he hey to present');
    // }dd('bhag be sale');


    // for Deleting the data using the session

    // echo($request->session()->get('name'));
    // echo($request->session()->forget('name')); 
    // used for deleting the session
    // echo($request->session()->get('name'));

    // deletign all dat from the sessson 
    $request->session()->flush();

    //    $data = ['name'=> $name, 'roll'=> $roll, 'city'=>$city, 'price'=> $price];

    //    return view('welcome',$data);
    }

    public function login(Request $request)
    {
        $request->session()->flash('status','Login successful');
        return redirect('/login');
    }
}
