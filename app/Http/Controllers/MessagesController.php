<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
    public function push(Request $request){
        $message=Message::create([

            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'message'=>$request->input('message')
        ]);
        if ($message){
               return back();
        }
        return back()->withInput();




    }
}
