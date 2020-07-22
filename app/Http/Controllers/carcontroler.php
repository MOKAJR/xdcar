<?php

namespace App\Http\Controllers;
use App\Showcar;


class carcontroler extends Controller
{

   
    public function show() {
         
        $cars = Showcar::all();
        $arr = Array('car' => $cars);
        return view('project.showcars', $arr);
    }
    public function details($id) {
        

        $findcar = Showcar::find($id);
        $arr = Array('detcar' => $findcar);
        return view('project.details_of_car', $arr);
    }

    public function contact() {
         
        return view('project.contact');
    }


}
