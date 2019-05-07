<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;
use App\Hint;

class AboutController extends Controller
{
    //

    public function hint(){
        $hints=Hint::all();
        $goals=Goal::all();
        return view('themar/about_us',['hints'=>$hints],['goals'=>$goals]);
    }


}
