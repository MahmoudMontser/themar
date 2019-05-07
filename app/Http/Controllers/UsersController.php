<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function retrieve_owners(){

        $owners=User::whereType('owner')->get();

        return view('themar/home',['users'=>$owners]);
    }

    public function signup(){

        return view('themar/signup');
    }
    public function signin(){

        return view('themar/signin');
    }

    public function create(Request $request){

//        $password = Hash::make($request->input('pass'));

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'pass'=>'required|confirmed',
            'pass_confirmation'=>'required'
        ]);

            $user=User::create([

                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>bcrypt($request->input('pass')),
                'phone_number'=>$request->input('phone_number'),
            ]);
        return route('signin');





    }


    public function edit()
    {

        if (Auth::check()) {
            $user=User::whereId(Auth::user()->id)->first();


            return view('themar/user_settings',['user'=>$user]);
        }

        echo "not login";
    }
    public function update_user(Request $request )
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'pass'=>'required|confirmed',
            'pass_confirmation'=>'required'
        ]);
        $user=User::whereId(Auth()->user()->id)->update(

            [
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>bcrypt($request->input('pass')),
                'phone_number'=>$request->input('phone_number'),

            ]
        );

        return back()->withInput();

    }
}
