<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;

class BuildingsController extends Controller
{
    //
     public function retrieve(){

         $buildings=Building::all();
            if('user_id'==User::id()->get()){
                $owners=User::whereStatus('owner')->get();

            }
            return view('themar/buildings',['buildings'=>$buildings],['owners'=>$owners]);




     }



    public function retrieve_all(){

        $buildings=Building::all();
        $first=Building::all()->sortBy('id')->first();
        return view('themar/buildings',['buildings'=>$buildings,'first'=>$first]);




    }




}
