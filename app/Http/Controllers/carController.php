<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class carController extends Controller
{
   
    public function saveCar(Request $request){
        if($request->car_id){
            $car = Car::find($request->car_id);
        }else{
            $car = new Car;
        }
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year_bought = $request->year_bought;
        $car->status = $request->status;
        $res = $car->save();
        return $res;
    }
    public function getCars(){
        return Car::all();
    }

    public function deleteCar(Request $request){
       Car::where('car_id', $request->car_id)->delete();
        return 1;
    }
}


