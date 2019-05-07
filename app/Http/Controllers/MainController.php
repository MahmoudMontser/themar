<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\Goal;
use App\Hint;
use App\User;

class MainController extends Controller
{
    //
    public function retrieve(){

        $buildings=Building::all();
        $hints=Hint::all();
        $goals=Goal::all();
        return view('themar/home',['buildings'=>$buildings],['goals'=>$goals,'hints'=>$hints]);




    }


}
