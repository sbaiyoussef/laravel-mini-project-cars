<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create(Request $request){
       $mark=$request['mark'];
       $model=$request['model'];
       $producedOn=$request['producedOn'];

       $car=new Car();
       $car->mark=$mark;
       $car->model=$model;
       $car->producedOn=$producedOn;
       $car->save();
       return redirect()->back();
      
    }
    public function show(){
        $cars=Car::all();
        return view('cars',['cars'=>$cars]);
    }
}
