<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\User;
use App\Message;
use App\Hint;
use App\Goal;
use App\Building;
use App\Bimage;
use App\Setting;
use Illuminate\View\View;

class AdminsController extends Controller
{


    public function login_page(){
        return view('dashboard/dash_login');

    }
    public function dash_home(){
        return view('dashboard/dash_home');

    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard_home');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('dashboard_login');
    }
    public function retrieve_users(){

        $users=User::whereAuthority('user')->get();

        return view('dashboard/dash_users',['users'=>$users]);
    }
    public function delete_user($id)
    {
        //
        $target_user=User::whereId($id)->delete();

            return redirect()->route('retrieve_users');



    }
    public function edit_user($id){

        $user=User::whereId($id)->first();
        return view('dashboard/dash_user_edit',['user'=>$user]);
    }
    public function update_user(Request $request ,$id)
    {
        $this->validate($request,[
            'name'=>'required',
                'email'=>'required|email|unique:users',
            'pass'=>'required|confirmed',
            'pass_confirmation'=>'required'
        ]);
        $user=User::whereId($id)->update(

            [
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>bcrypt($request->input('pass')),
                'phone_number'=>$request->input('phone_number'),

            ]
        );

        return back()->withInput();

    }
    public function create_users_page(){

        return view('dashboard/dash_user_create');
    }



    public function create_user(Request $request){
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
        return redirect()->route('retrieve_users');





    }



    public function retrieve_messages()
    {
        $messages=Message::all();


        return view('dashboard/messages',['messages'=>$messages]);
    }


    public function delete_message($id)
    {
        //
        $target_message=Message::whereId($id)->delete();

        return redirect()->route('retrieve_messages');



    }

    public function create_hint(Request $request)
    {
        $hint=Hint::create([

            'title'=>$request->input(   'title'),
            'hint'=>$request->input('hint')

        ]);
        return redirect(route('retrieve_hints'));


    }

    public function create_goal(Request $request)
    {
        $hint=Goal::create([

            'goal'=>$request->input('goal')

        ]);
        return redirect(route('retrieve_goals'));


    }




    public function retrieve_hints()
    {
        $hints=Hint::all();

        return view('dashboard/hints',['hints'=>$hints]);
    }





    public function delete_hint($id)
    {
        //
        $target_hint=Hint::whereId($id)->delete();

        return redirect()->route('retrieve_hints');



    }

    public function retrieve_goals()
    {

        $goals=Goal::all();
        return view('dashboard/goals',['goals'=>$goals]);
    }



    public function edit_hint($id){

        $hint=Hint::whereId($id)->first();
        return view('dashboard/update_hint',['hint'=>$hint]);
    }


    public function update_hint(Request $request ,$id){

        $hint=Hint::whereId($id)->update(

            [
                'title'=>$request->input('title'),
                'hint'=>$request->input('hint'),


            ]
        );
        return redirect()->route('retrieve_hints');

    }


    public function edit_goal($id){

        $goal=Goal::whereId($id)->first();
        return view('dashboard/update_goal',['goal'=>$goal]);
    }


    public function update_goal(Request $request ,$id){

        $goal=Goal::whereId($id)->update(

            [
                'goal'=>$request->input('goal'),


            ]
        );

        return redirect()->route('retrieve_goals');

    }

    public function delete_goal($id)
    {
        //
        $target_goal=Goal::whereId($id)->delete();

        return redirect()->route('retrieve_goals');



    }









    public function create_buildings_page(){

        return view('dashboard/create_building');
    }
    public function create_building(Request $request){

        $building=Building::create([

            'name'=>$request->input('name'),
            'owner'=>$request->input('owner'),
            'location_id'=>$request->input('location_id'),
            'status'=>$request->input('status'),
            'description'=>$request->input('description'),
        ]);
        return redirect(route('retrieve_buildings'));
    }





        public function retrieve_buildings()
    {

        $buildings=Building::all();
        return view('dashboard/buildings',['buildings'=>$buildings]);
    }
    public function edit_building($id){

        $building=building::whereId($id)->first();
        return view('dashboard/update_building',['building'=>$building]);
    }
    public function update_building(Request $request ,$id)
    {

        $building = Building::whereId($id)->update(

            [
                'name' => $request->input('name'),
                'owner' => $request->input('owner'),
                'location_id' => $request->input('location_id'),
                'status' => $request->input('status'),
                'description' => $request->input('description'),


            ]
        );
        return redirect(route('retrieve_buildings'));
    }

    public function delete_building($id)
    {
        //
        $target_building=Building::whereId($id)->delete();

        return back();



    }


    public function add_bimages($id)
    {
        $b = Building::find($id);
        $bimages=$b->building_images;

        return view('dashboard/Add_images',compact('bimages','id','b'));
    }



    public function  store_bimage(Request $request ,$id){
//        $path = $request->file('image')->store('upload');
//        $full_path = Storage::path($path);
//        $bimage=Bimage::create([
//
//            'image'=>$full_path,
//            'building_id'=>$id
//
//        ]);
//        echo "<img src=$path>";
//       // return redirect(route('add_bimage',$id));
        if ($request->hasFile('image')){
            $image_name = md5($request['image']->getClientOriginalName()).'.'.$request['image']->getClientOriginalExtension();
            $request['image']->move(public_path('images/b_images'),$image_name);
            $b = new Bimage();
            $b->image = $image_name;
            $b->building_id = $id;
            $b->save();
            return back();
        }
        return "error";
    }

    public function delete_bimage($id)
    {
        //
        $target_image=Bimage::whereId($id)->delete();

        return back();



    }




    public function set_settings()
    {
       $settings=Setting::all()->first();

       return view('dashboard.settings',['settings'=>$settings]);


    }

    public function settings(Request $request)
    {
      //  Setting::truncate();
        $setting=Setting::orderBy('created_at','DESC')->first();
        if ($request->hasFile('icon')){
        $icon = md5($request['icon']->getClientOriginalName()).'.'.$request['icon']->getClientOriginalExtension();
        $request['icon']->move(public_path('images/settings'),$icon);
        }else{
            $icon = $setting->title_icon;
        }

        if ($request->hasFile('logo')){
        $logo = md5($request['logo']->getClientOriginalName()).'.'.$request['logo']->getClientOriginalExtension();
        $request['logo']->move(public_path('images/settings'),$logo);}else{
            $logo = $setting->logo;
        }

        if ($request->hasFile('about')){
        $about = md5($request['about']->getClientOriginalName()).'.'.$request['about']->getClientOriginalExtension();
        $request['about']->move(public_path('images/settings'),$about);}else{
            $about = $setting->about_us_image;
        }
        $setting->title=$request['title'];
        $setting->title_icon=$icon;
        $setting->logo=$logo;
        $setting->about_us_image=$about;
        $setting->text_below_logo=$request['footer_text'];
        $setting->phone=$request['phone'];
        $setting->whatsapp=$request['whatsapp'];
        $setting->email=$request['email'];
        $setting->facebook_contact=$request['fb'];
        $setting->twitter_contact=$request['twit'];
        $setting->google_contact=$request['g+'];
        $setting->instagram_contact=$request['insta'];
        $setting->update();



return back();
    }




}
