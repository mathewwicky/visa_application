<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    //login function
    public function login()
    {
        return view("auth.login");
    }

    //registration function
    public function registration()
    {
        return view("auth.registration");
    }

    public function register(Request $request)
    {

        $request->validate([

            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'

        ]);
        $user = new User();
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
                return back()->with('success', 'You successfully register');
        }else{
            return back()->with('fail', 'Something went wrong');
        }

    }
    //function to login into the application
    public function loginUser(Request $request)
    {
        $request->validate([

            'email'=>'required|email',
            'password'=>'required|min:5|max:12'

        ]); 
        $user = User::where('email', '=' ,$request->email)->first(); 
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');

            } else{
                return back()->with('fail','Password does not matches.');
            }               
        }else{
            return back()->with('fail','This email is not registered');
        }

    }
    //dashboard function
    public function dashboard()
    {
        $data =array();
        if (Session::has('loginId')){
            $data = User::where('id', '=' ,Session::has('loginId'))->first(); 

        }
        return view('dashboard',compact('data'));
    }
    //logout function
    public function logout()
    {
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }


    }
}
